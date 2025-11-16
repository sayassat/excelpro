<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Controllers\Auth;


class MainController extends Controller
{
    public function index() {

        if (auth()->id() !== 1) {
            return view('start');
        }

        $videos = Video::all();
        return view('main', compact('videos'));
    }
}