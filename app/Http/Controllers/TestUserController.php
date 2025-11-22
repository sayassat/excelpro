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

        $correctAnswers = 0;
        
        $questions = Test::find($testId)->questions;

        for ($i = 0; $i < count($questions); $i++) {
            if (isset($testAnswers[$i+1])) {
                if ($testAnswers[$i+1] == $questions[$i]->correct_answer) {
                    $correctAnswers++;
                }
            }
        }

        $score = round($correctAnswers/count($questions), 2);

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
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'Relation saved successfully',
            'data'    => $testUser
        ]);
    }
}
