<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;

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

    public function add(Request $request)
    {
        $request->validate([
            'test_id' => 'required|exists:tests,id',
            'option_id' => 'required|exists:options,id',
        ]);

        $test = Test::findOrFail($request->test_id);
        $test->score += 1;
        $test->save();

        return redirect()->back()->with('success', 'Score updated!');
    }

    public function showTest(){
        $test = Test::all();
        return view('test', ['test'=>$test]);
    }
}
