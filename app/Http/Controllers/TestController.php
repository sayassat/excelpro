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
            'pass' => 'required|numeric',
            'level' => 'required|integer',
        ]);

        $data['test_number'] = trim($data['test_number']);
        $data['pass'] = trim($data['pass']);
        $data['level'] = trim($data['level']);
        
        Test::create($data);
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
            'pass' => 'required|numeric',
            'level' => 'required|integer',
        ]);

        $data['test_number'] = trim($data['test_number']);
        $data['pass'] = trim($data['pass']);
        $data['level'] = trim($data['level']);

        $test->update($data);
        return redirect()->route('test.show', $test->id);
    }

    public function destroy(Test $test) {
        $test->delete();
        return redirect()->route('test.index');
    }
}
