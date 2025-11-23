<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestUser;
use App\Models\Test;

class TestUserController extends Controller
{
    public function store(Request $request)
    {

        $testAnswers = $request->input('testAnswers');
        $testId = $request->input('test_id');
        $userId = $request->input('user_id');

        $test = Test::find($testId);
        $questions = $test->questions;

        $correctAnswers = 0;

        for ($i = 0; $i < count($questions); $i++) {
            if (isset($testAnswers[$i+1])) {
                if ($testAnswers[$i+1] == $questions[$i]->correct_answer) {
                    $correctAnswers++;
                }
            }
        }

        $score = round($correctAnswers/count($questions), 2);

        $highest_score = TestUser::where('user_id', $userId)
            ->where('test_id', $testId)
            ->value('highest_score');

        $passed = TestUser::where('user_id', $userId)
            ->where('test_id', $testId)
            ->value('passed');

        if ($highest_score === null || $score > $highest_score) {
            
            $highest_score = $score;

            if ($highest_score >= $test->pass) {
                $passed = true;
            }
        }

        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'test_id' => 'required|exists:tests,id',
        ]);

        // create or update pivot record
        $testUser = TestUser::updateOrCreate(
            [
                'user_id' => $validated['user_id'],
                'test_id' => $validated['test_id'],
            ],
            [
                'score' => $score ?? null,
                'highest_score' => $highest_score ?? null,
                'passed' => $passed ?? false,
            ]
        );

        $testUser['pass'] =  $test->pass;

        return response()->json([
            'success' => true,
            'message' => 'Relation saved successfully',
            'data'    => $testUser
        ]);
    }

    public function show(Request $request)
    {

        $testAnswers = $request->input('testAnswers');
        $testId = $request->input('test_id');

        $test = Test::find($testId);
        $questions = $test->questions;

        $correctAnswers = 0;

        for ($i = 0; $i < count($questions); $i++) {
            if (isset($testAnswers[$i+1])) {
                if ($testAnswers[$i+1] == $questions[$i]->correct_answer) {
                    $correctAnswers++;
                }
            }
        }

        $score = round($correctAnswers/count($questions), 2);
        $passed = false;

        if ($score >= $test->pass) {
            $passed = true;
        }

        $testUser = [];

        $testUser['test_id'] = $testId;
        $testUser['pass'] =  $test->pass;
        $testUser['score'] =  $score;
        $testUser['passed'] =  $passed;

        return response()->json([
            'success' => true,
            'message' => 'Relation saved successfully',
            'data'    => $testUser
        ]);
    }
}
