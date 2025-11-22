<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Test;

class QuestionController extends Controller
{
    public function index() {

        $questions = Question::all();
        return view('question.index', compact('questions','tests'));
    }

    public function create(Test $test) {
        return view('question.create', compact('test'));
    }

    public function store() {

        $data = request()->validate([
            'test_id' => 'required|exists:tests,id',
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

        Question::create($data);
        return redirect()->route('test.show', request()->test_id);
    }

    public function show(Question $question) {
        return view('question.show', compact('question'));
    }

    public function edit(Question $question) {
        return view('question.edit', compact('question'));
    }

    public function update(Question $question) {
        $data = request()->validate([
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

        $question->update($data);
        return redirect()->route('test.show', $question->test_id);
    }

    public function destroy(Question $question) {
        $question->delete();
        return redirect()->route('test.show', $question->test_id);
    }
}
