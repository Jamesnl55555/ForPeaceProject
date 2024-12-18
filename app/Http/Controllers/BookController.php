<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use App\Models\Option;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BookController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/loginpage');
    }
    public function registerPage(){
        return view('registerpage');
    }
    public function register(Request $request){
        $val = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $val['password'] = bcrypt($val['password']);
        $user = User::create($val);
        Auth::login($user);

        return redirect('/');
    }

    public function loginPage(){
        return view('loginpage');
    }
    public function login(Request $request){
        $user = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if (auth()->guard('web')->attempt(['email' => $user['email'],'password'=>$user['password']])){
            $request->session()->regenerate();
            return redirect('/');
        }
        else{
            return back()->withErrors(['email' => 'Invalid credentials.']);

        
        }
        
    }

    public function Main()
    {
        return view('main');
    }

    public function synonym($testId)
    {
        $test = Test::with('questions.options')->findOrFail($testId);
        
        return view('synonym', compact('test'));
    }

    public function Add(Request $request)
    {
        $validated = $request->validate([
            'score' => 'integer'
        ]);

        $tested = Test::findOrFail($request->test_id);
        $tested->score = $validated['score'];
        $tested->save();
        
        $test = Test::all();
        return view('test', ['test'=>$test]);
    }

    public function showTest(){
        $test = Test::all();
        return view('test', ['test'=>$test]);
    }

    public function takeTest(){
        return view('createst');
    }

    public function createst(Request $request){
        $val = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'quantity' => 'required'
        ]);

        $testId = DB::table('tests')->insertGetId([
            'name' => $val['name'],
            'type' => $val['type'],
            'question_quantity' => $val['quantity'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $questions=[
            'Ano ang kasingkahulugan ng sakuna?' => 'Aksidente',
            'Ano ang kasingkahulugan ng alaala?' => 'Gunita',
            'Ano ang kasingkahulugan ng alapaap?' => 'Ulap',
            'Ano ang kasingkahulugan ng batid' => 'Alam',
            'Ano ang kasingkahulugan ng angal' => 'Reklamo',
            'Ano ang kasingkahulugan ng leksyon' => 'Aralin'
        ];
        

        $allQuestions = array_keys($questions);
        $allAnswers = array_values($questions);
        $seedData = [];
        foreach ($questions as $questionText => $correctAnswer) {
            $options = getRandomOptions($correctAnswer, $allAnswers);

            // Shuffle options to ensure random order
            shuffle($options);

            // Insert the correct answer into a random position in the options array
            $correctIndex = array_rand($options);
            array_splice($options, $correctIndex, 0, $correctAnswer);

            // Format options for seeding into the database
            $formattedOptions = [];
            foreach ($options as $optionText) {
                $formattedOptions[] = [
                    'option_text' => $optionText,
                    'status' => $optionText === $correctAnswer ? 1 : 0,
                ];
            }
            $seedData[] = [
                'text' => $questionText,
                'type' => $val['type'],
                'options' => $formattedOptions,
            ];

        }

        foreach ($seedData as $question) 
        {
            $questionId = DB::table('questions')->insertGetId([
                'text' => $question['text'],
                'type' => $question['type'],
                'test_id' => $testId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        foreach ($question['options'] as $option) {
            DB::table('options')->insert([
                'question_id' => $questionId,
                'option_text' => $option['option_text'],
                'status' => $option['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        }
        return redirect()->route('Synonym', $testId);

    }
}
if (!function_exists('getRandomOptions')) {
    function getRandomOptions($correctAnswer, $allAnswers) {
        $otherAnswers = array_filter($allAnswers, fn($answer) => $answer !== $correctAnswer);
        $randomOptions = array_rand(array_flip($otherAnswers), min(3, count($otherAnswers)));
        return is_array($randomOptions) ? $randomOptions : [$randomOptions];
    }
}