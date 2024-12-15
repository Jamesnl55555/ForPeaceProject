<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class BookController extends Controller
{
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
}
