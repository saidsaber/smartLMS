<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Lecture;
use App\Jobs\UploadVideoJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLectureRequest;

class LectureController extends Controller
{
    public function create()
    {
        return view('teacher.createLecture');
    }

    public function store(CreateLectureRequest $request)
    {
        $lecture = Lecture::create([
            'name' => $request->name,
            'description' => $request->description,
            'module_id' => 1
        ]);
        $videoPath = $request->file('video')->store('temp/videos');
        UploadVideoJob::dispatch($videoPath, $lecture->id);

        return redirect()->back()->with('success', 'Lecture created and video is uploading in the background!');
    }
}
