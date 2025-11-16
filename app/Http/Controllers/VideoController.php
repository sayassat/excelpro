<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Video;
use Symfony\Component\HttpFoundation\StreamedResponse;

class VideoController extends Controller
{

    public function index() {

        $videos = Video::all();
        return view('video.index', compact('videos'));
    }

    public function create() {
        return view('video.create');
    }

    public function store() {

        $data = request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'location' => 'required|string',
            'poster' => 'string',
            'lecture' => 'string',
            'presentation' => 'string',
            'practice' => 'string',
        ]);
        
        $video = Video::create($data);
        return redirect()->route('video.index');
    }

    public function edit(Video $video) {
        return view('video.edit', compact('video'));
    }

    public function update(Video $video) {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'location' => 'string',
            'poster' => 'string',
            'lecture' => 'string',
            'presentation' => 'string',
            'practice' => 'string',
        ]);

        $video->update($data);
        return redirect()->route('video.index');
    }

    public function destroy(Video $video) {
        $video->delete();
        return redirect()->route('video.index');
    }

    public function stream(Request $request, $filename)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $path = storage_path('app/videos/' . $filename);

        if (!file_exists($path)) {
            abort(404);
        }

        $size = filesize($path);
        $start = 0;
        $end = $size - 1;

        // Проверяем заголовок Range
        if ($request->headers->has('Range')) {
            $range = $request->header('Range');
            [$start, $end] = explode('-', str_replace('bytes=', '', $range)) + [0, $size - 1];
            $end = ($end == '' ? $size - 1 : (int)$end);
            $start = (int)$start;
        }

        $length = $end - $start + 1;

        $response = new StreamedResponse(function () use ($path, $start, $length) {
            $file = fopen($path, 'rb');
            fseek($file, $start);
            $buffer = 1024 * 8;
            $bytesLeft = $length;

            while ($bytesLeft > 0 && !feof($file)) {
                $chunk = fread($file, min($buffer, $bytesLeft));
                echo $chunk;
                flush();
                $bytesLeft -= strlen($chunk);
            }

            fclose($file);
        });

        $response->headers->set('Content-Type', 'video/mp4');
        $response->headers->set('Content-Length', $length);
        $response->headers->set('Accept-Ranges', 'bytes');
        $response->headers->set('Content-Range', "bytes $start-$end/$size");
        $response->setStatusCode($request->headers->has('Range') ? 206 : 200);

        return $response;
    }

    public function demo(Request $request, $filename)
    {
        $path = public_path('video/demo.mp4');

        if (!file_exists($path)) {
            abort(404);
        }

        $size = filesize($path);
        $start = 0;
        $end = $size - 1;

        if ($request->headers->has('Range')) {
            $range = $request->header('Range');
            [$start, $end] = explode('-', str_replace('bytes=', '', $range)) + [0, $size - 1];
            $end = ($end === '' ? $size - 1 : (int)$end);
            $start = (int)$start;
        }

        $length = $end - $start + 1;

        $response = new StreamedResponse(function () use ($path, $start, $length) {
            $file = fopen($path, 'rb');
            fseek($file, $start);
            $buffer = 1024 * 8;
            $bytesLeft = $length;

            while ($bytesLeft > 0 && !feof($file)) {
                $chunk = fread($file, min($buffer, $bytesLeft));
                echo $chunk;
                flush();
                $bytesLeft -= strlen($chunk);
            }

            fclose($file);
        });

        $response->headers->set('Content-Type', 'video/mp4');
        $response->headers->set('Content-Length', $length);
        $response->headers->set('Accept-Ranges', 'bytes');
        $response->headers->set('Content-Range', "bytes $start-$end/$size");
        $response->setStatusCode($request->headers->has('Range') ? 206 : 200);

        return $response;
    }
}
