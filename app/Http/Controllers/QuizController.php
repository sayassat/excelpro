<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class QuizController extends Controller
{
    public function index(Test $test, Request $request) {
        $questions = $test->questions()->paginate(10);

        if ($request->ajax()) {
            // Hide specific columns just for this response
            $questions->setCollection(
                $questions->getCollection()->makeHidden(['correct_answer','created_at','updated_at','deleted_at'])
            );

            return response()->json([
                'questions' => $questions->items(),
                'pagination' => [
                    'current_page' => $questions->currentPage(),
                    'last_page' => $questions->lastPage(),
                    'next_page_url' => $questions->nextPageUrl(),
                    'prev_page_url' => $questions->previousPageUrl(),
                ]
            ]);
        }
    }

    public function demo(Request $request) {

        $test = Test::find(1);
        // dd($test);
        $questions = $test->questions()->paginate(10);

        if ($request->ajax()) {
            // Hide specific columns just for this response
            $questions->setCollection(
                $questions->getCollection()->makeHidden(['correct_answer','created_at','updated_at','deleted_at'])
            );

            return response()->json([
                'questions' => $questions->items(),
                'pagination' => [
                    'current_page' => $questions->currentPage(),
                    'last_page' => $questions->lastPage(),
                    'next_page_url' => $questions->nextPageUrl(),
                    'prev_page_url' => $questions->previousPageUrl(),
                ]
            ]);
        }
    }
}
