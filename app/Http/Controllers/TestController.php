<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index() {

        $tests = Test::all();
        return view('test.index', compact('tests'));
    }

    public function create() {
        return view('test.create');
    }

    public function store() {

        $data = request()->validate([
            'test_number' => 'required|integer',
            'question_number' => 'required|integer',
            'question' => 'required|string',
            'answer_a' => 'required|string',
            'answer_b' => 'required|string',
            'answer_c' => 'required|string',
            'answer_d' => 'required|string',
            'correct_answer' => 'required|string',
        ]);

        $data['question'] = trim($data['question']);
        $data['answer_a'] = trim($data['answer_a']);
        $data['answer_b'] = trim($data['answer_b']);
        $data['answer_c'] = trim($data['answer_c']);
        $data['answer_d'] = trim($data['answer_d']);
        $data['correct_answer'] = trim($data['correct_answer']);
        
        $test = Test::create($data);
        return redirect()->route('test.index');
    }

    public function show(Test $test) {
        return view('test.show', compact('test'));
    }

    public function edit(Test $test) {
        return view('test.edit', compact('test'));
    }

    public function update(Test $test) {
        $data = request()->validate([
            'test_number' => 'required|integer',
            'question_number' => 'required|integer',
            'question' => 'required|string',
            'answer_a' => 'required|string',
            'answer_b' => 'required|string',
            'answer_c' => 'required|string',
            'answer_d' => 'required|string',
            'correct_answer' => 'required|string',
        ]);

        $data['question'] = trim($data['question']);
        $data['answer_a'] = trim($data['answer_a']);
        $data['answer_b'] = trim($data['answer_b']);
        $data['answer_c'] = trim($data['answer_c']);
        $data['answer_d'] = trim($data['answer_d']);
        $data['correct_answer'] = trim($data['correct_answer']);

        $test->update($data);
        return redirect()->route('test.show', $test->id);
    }

    public function destroy(Test $test) {
        $test->delete();
        return redirect()->route('test.index');
    }
}
