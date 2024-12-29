<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use App\Models\Bookmark;
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
        if (User::where('email', $val['email'])->exists()){
            return back()->withErrors(['email' => 'Email account is already made in this site']);
        }
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
        $user = auth()->user();
        $bookmark = $user->bookmarks()->get();
        return view('main', compact('bookmark'));
    }
    public function bookmark(Request $request){
        $b = $request->validate([
            'page' => 'integer'
        ]);
        $user = auth()->user();
        $bookmark = Bookmark::create(['user_id' => $user->id, 'page' => $b['page']]);
        return response()->json([
            'success' => true,
            'bookmark' => $bookmark
        ]);
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
        $user = auth()->user();
        $tested = Test::findOrFail($request->test_id);
        $tested->score = $validated['score'];
        $tested->save();
        
        $test = $user->tests()->findOrFail($request->test_id);
        return redirect()->route('showTest');
    }

    public function showTest(){
        $user = auth()->user();
        $test = $user->tests()->get();

        if ($test->isEmpty()) {
            return view('test', ['test' => collect(), 'message' => 'No tests available.']);
        }
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
            'user_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        if($val['type'] == 'Synonyms'){
            $questions=[
                'Ano ang kasingkahulugan ng sakuna?' => 'Aksidente',
                'Ano ang kasingkahulugan ng alaala?' => 'Gunita',
                'Ano ang kasingkahulugan ng alapaap?' => 'Ulap',
                'Ano ang kasingkahulugan ng batid' => 'Alam',
                'Ano ang kasingkahulugan ng angal' => 'Reklamo',
                'Ano ang kasingkahulugan ng leksyon' => 'Aralin'
            ];
        }
        elseif($val['type'] == 'Antonyms'){
            $questions=[
                'Ano ang kasinonimo ng sakuna?' => 'Good Sakuna',
                'Ano ang kasinonimo ng alaala?' => 'Kinalimutan',
                'Ano ang kasinonimo ng alapaap?' => 'Lupa',
                'Ano ang kasinonimo ng batid' => 'Di ko alam',
                'Ano ang kasinonimo ng angal' => 'Gusto',
                'Ano ang kasinonimo ng leksyon' => 'Wag Aralin'
            ];
        }
        else{
            $questions=[
                'Ano ang kasinonimo ng sakuna?' => 'Good Sakuna',
                'Ano ang kasinonimo ng alaala?' => 'Kinalimutan',
                'Ano ang kasinonimo ng alapaap?' => 'Lupa',
                'Ano ang kasinonimo ng batid' => 'Di ko alam',
                'Ano ang kasinonimo ng angal' => 'Gusto',
                'Ano ang kasinonimo ng leksyon' => 'Wag Aralin',
                'Ano ang kasingkahulugan ng sakuna?' => 'Aksidente',
                'Ano ang kasingkahulugan ng alaala?' => 'Gunita',
                'Ano ang kasingkahulugan ng alapaap?' => 'Ulap',
                'Ano ang kasingkahulugan ng batid' => 'Alam',
                'Ano ang kasingkahulugan ng angal' => 'Reklamo',
                'Ano ang kasingkahulugan ng leksyon' => 'Aralin'

            ];
        }
        

        function shuff(array $questions){
            $question = array_keys($questions);
            shuffle($question);
            $shuffl=[];
            foreach($question as $quest){
                $shuffl[$quest] = $questions[$quest];
            }
            return $shuffl;
        }        

        $allQuestions = array_keys($questions);
        $allAnswers = array_values($questions);
        $shuffQuestions = shuff($questions);
        $limitQuestions =[];
        
        $limQ = array_keys($shuffQuestions);

        for($i=0; $i < $val['quantity']; $i++){
            $Q = $limQ[$i];
            $limitQuestions[$Q] = $shuffQuestions[$Q];
        }
        


        $seedData = [];
        foreach ($limitQuestions as $questionText => $correctAnswer) {
            $options = getRandomOptions($correctAnswer, $allAnswers);
            
            $correctIndex = rand(0,count($options));
            array_splice($options, $correctIndex, 0, $correctAnswer);
            shuffle($options);
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