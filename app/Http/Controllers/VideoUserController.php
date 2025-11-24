<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoUser;
use App\Models\TestUser;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;
use App\Models\Test;
use App\Models\Certificate;
use Carbon\Carbon;

class VideoUserController extends Controller
{
    public function store(Request $request)
    {

        $userId = Auth::user()->id;

        $validated = $request->validate([
            'video_id' => 'required|exists:videos,id',
            'watched'  => 'required|boolean',
        ]);

        $watched_initial = VideoUser::where('user_id', $userId)->where('video_id', $request->input('video_id'))->first();

        $watched_initial = $watched_initial ? $watched_initial->watched : false;

        // create or update pivot record

        $videoUser = VideoUser::updateOrCreate(
            [
                'user_id' => $userId,
                'video_id' => $validated['video_id'],
            ],
            [
                'watched' => $validated['watched'],
            ]
        );

        // check for certificate

        $watched = $request->input('watched');
        $videoPassed = false;
        $testPassed = false;

        if ($watched != $watched_initial) {

            $videos = Video::where('id', '!=', 1)->get();
            $videoUsers = VideoUser::where('user_id', $userId)->where('video_id', '!=', 1)->get();

            if ($videoUsers->count() == $videos->count()) {

                $videoResult = 0;
                for ($i=0; $i<$videoUsers->count(); $i++) {

                    if ($videoUsers[$i]->watched) {
                        $videoResult++;
                    }
                }

                if ($videoResult == $videos->count()) {
                    $videoPassed = true;
                }
            }
        }

        if ($watched != $watched_initial) {

            $tests = Test::where('id', '!=', 1)->get();
            $testUsers = TestUser::where('user_id', $userId)->where('test_id', '!=', 1)->get();

            if ($testUsers->count() == $tests->count()) {

                $testResult = 0;
                for ($i=0; $i<$testUsers->count(); $i++) {

                    if ($testUsers[$i]->passed) {
                        $testResult++;
                    }
                }

                if ($testResult == $tests->count()) {
                    $testPassed = true;
                }
            }
        }

        if ($videoPassed && $testPassed) {

            Certificate::updateOrCreate(
                [
                    'user_id' => $userId,
                ],
                [
                    'title' => 'Курс Microsoft Excel: от простого к сложному',
                    'certificate_number' => Certificate::max('certificate_number') + 1,
                    'issued_at' => Carbon::today(),
                ]
            );

        }

        return response()->json([
            'success' => true,
            'message' => 'Relation saved successfully',
            'data'    => $videoUser
        ]);
    }
}
