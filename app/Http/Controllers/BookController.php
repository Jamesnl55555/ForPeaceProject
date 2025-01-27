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
    private $NameQuestions=[
        'Siya ang minamahal ng pangunahing tauhan ng Noli Mi Tangere na nagbalik mula sa Europa.' => 'Maria Clara',
        'Siya ang ama ng dalagang minamahal ng pangunahing tauhan ng Noli Mi Tangere at isang mayamang negosyante.' => 'Kapitan Tiago',
        'Siya ang pangunahing tauhan sa Noli Me tangere' => ' Crisostomo Ibarra',
        'Siya ay isang matandang pari at mataas na opisyal ng simbahan sa bayan ng San Diego' => 'Padre Damaso',
        'Siya ay isang pari at tagapayo sa mga opisyal ng simbahan sa Noli Me Tangere.' => 'Padre Salvi',
        'Siya ay ang matalik at misteryosong kaibigan ng pangunahing tauhan ng Noli Me Tagere' => 'Elias',
        'Siya ang ina nina Bsilio at Crispin' => 'Sisa',
    ];
    private $MCNQuestions=[
        'Siya ang minamahal ng pangunahing tauhan ng Noli Mi Tangere na nagbalik mula sa Europa.' => 'Maria Clara',
        'Siya ang ama ng dalagang minamahal ng pangunahing tauhan ng Noli Mi Tangere at isang mayamang negosyante.' => 'Kapitan Tiago',
        'Siya ang pangunahing tauhan sa Noli Me tangere' => ' Crisostomo Ibarra',
        'Siya ay isang matandang pari at mataas na opisyal ng simbahan sa bayan ng San Diego' => 'Padre Damaso',
        'Siya ay isang pari at tagapayo sa mga opisyal ng simbahan sa Noli Me Tangere.' => 'Padre Salvi',
        'Siya ay ang matalik at misteryosong kaibigan ng pangunahing tauhan ng Noli Me Tagere' => 'Elias',
        'Siya ang ina nina Bsilio at Crispin' => 'Sisa',
    ];
    private $SynQuestions=[
        'Ano ang kasingkahulugan ng sakuna?' => 'Aksidente',
        'Ano ang kasingkahulugan ng alaala?' => 'Gunita',
        'Ano ang kasingkahulugan ng alapaap?' => 'Ulap',
        'Ano ang kasingkahulugan ng batid' => 'Alam',
        'Ano ang kasingkahulugan ng angal' => 'Reklamo',
        'Ano ang kasingkahulugan ng leksyon' => 'Aralin'
    ];

    private $AntQuestions=[
        'Ano ang kasinonimo ng sakuna?' => 'Good Sakuna',
        'Ano ang kasinonimo ng alaala?' => 'Kinalimutan',
        'Ano ang kasinonimo ng alapaap?' => 'Lupa',
        'Ano ang kasinonimo ng batid' => 'Di ko alam',
        'Ano ang kasinonimo ng angal' => 'Gusto',
        'Ano ang kasinonimo ng leksyon' => 'Wag Aralin'
    ];
    private $IdnQuestions=[
        'Kabuuang pangalan ng nagsulat ng Noli Me Tangere' => 'Jose Protasio Rizal Mercado y Alonso Realonda',
        'Ano?' => 'Good',
        'And your mad?' => 'Bad',
        'hi?' => 'Lonely',
        'hello' => 'Happy',
        'Ano ang expresyon mo' => 'Mad',
        'Ano ka' => 'Calm'
    ];
    
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
    public function Home(){
        $questions = array_merge($this->SynQuestions, $this->AntQuestions, $this->IdnQuestions, $this->NameQuestions);
        $randttext = array_rand($questions); 
        $randval = $questions[$randttext];
        $text = $randttext;
        $textval = $randval;

        
        return view('home', compact( 'text', 'textval'));
    }
    public function Main()
    {
        $user = auth()->user();
        $bookmark = $user->bookmarks()->get();
        $mind=[
            'Hello' => "Hello {$user->name}, ano ang aking maitutulong?",
            'Ano ang iyong pangalan?' => 'Ang pangalan ko ay tobY'
        ];
        $option = array_keys($mind);
        $answer = array_values($mind);
        return view('main', compact('bookmark', 'option', 'answer'));
    }
    public function response(Request $request){
        $question = strtolower($request->input('question'));
        $answer = $this->mind[$question] ?? 'Sorry, I don’t understand that.';

        return response()->json(['question' => $question, 'answer' => $answer]);
    }
    public function bookmark(Request $request){
        $b = $request->validate([
            'page' => 'integer'
        ]);
        $user = auth()->user();
        Bookmark::create(['user_id' => $user->id, 'page' => $b['page']]);
        $bookmarks = Bookmark::where('user_id', $user->id)->get();
        return response()->json([
            'success' => true,
            'bookmarks' => $bookmarks
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
        if($request['type'] == 'Rankings'){
            $user->rank = $validated['score'];
            $user->save();
        }
        
        $tested->save();
        
        $test = $user->tests()->findOrFail($request->test_id);
        return redirect()->route('showTest');
    }

        
    public function leaderboards(){
        $users = User::orderBy('rank', 'desc')->get();
        return view('leaderboards', compact('users'));
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
        
        
        if($val['type'] == 'Synonyms'){
            $questions= $this->SynQuestions;
        }
        elseif($val['type'] == 'Antonyms'){
            $questions= $this->AntQuestions;
        }
        elseif($val['type'] == 'Identifications'){
            $questions= array_merge($this->IdnQuestions, $this->NameQuestions);
        }
        elseif($val['type'] == 'Rankings'){
            $questions = array_merge($this->SynQuestions, $this->AntQuestions, $this->IdnQuestions, $this->NameQuestions, $this->MCNQuestions);  
            $val['quantity'] = count($questions);
        }
        else{
            $questions = array_merge($this->SynQuestions, $this->AntQuestions, $this->IdnQuestions, $this->NameQuestions, $this->MCNQuestions);  
        }
        

        $testId = DB::table('tests')->insertGetId([
            'name' => $val['name'],
            'type' => $val['type'],
            'question_quantity' => $val['quantity'],
            'user_id' => auth()->id(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

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
        $allAnswers = array_values(array_merge($this->SynQuestions, $this->AntQuestions));
        $MCNQuestions = array_values($this->MCNQuestions);
        $shuffQuestions = shuff($questions);
        $limitQuestions =[];
        
        $limQ = array_keys($shuffQuestions);

        for($i=0; $i < $val['quantity']; $i++){
            $Q = $limQ[$i];
            $limitQuestions[$Q] = $shuffQuestions[$Q];
        }
        


        $seedData = [];
        foreach ($limitQuestions as $questionText => $correctAnswer) {
            $isMCN = rand(0, 1);
            if( array_key_exists($questionText, $this->IdnQuestions)){
                $seedData[] = [
                    'text' => $questionText,
                    'type' => 'Identifications',
                    'correct_answer' => $correctAnswer,
                    'options' => []
                ];
            }elseif($isMCN && array_key_exists($questionText, $this->NameQuestions)){    
                $seedData[] = [
                'text' => $questionText,
                'type' => 'Identifications',
                'correct_answer' => $correctAnswer,
                'options' => []
                ];
            }elseif(array_key_exists($questionText, $this->MCNQuestions)){    

                $options = getRandomOptions($correctAnswer, $MCNQuestions);
                
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

        
            }else{
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
    }
        foreach ($seedData as $question) 
        {
            $questionId = DB::table('questions')->insertGetId([
                'text' => $question['text'],
                'type' => $question['type'],
                'correct_answer' => $question['type'] === 'Identifications' ? $question['correct_answer'] : null,
                'test_id' => $testId,
                'created_at' => now(),
                'updated_at' => now(),
            ]);  
        if($question['type'] !== 'Identifications' && isset($question['options'])){
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
