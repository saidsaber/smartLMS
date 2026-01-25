<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use App\Traits\UploadImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Teacher\CreateCourseRequest;
use App\Service\Teacher\CourseService;

class CoursesController extends Controller
{

    use UploadImage;

    public function index()
    {
        return view('teacher.mycourses', ['courses' => Course::where('auther_id', Auth::guard('teacher')->id())->get()]);
    }

    public function create()
    {
        return view('teacher.formcreatecourse');
    }

    public function store(CreateCourseRequest $request, CourseService $courseService)
    {
        $validates = $request->validated();
        $validates['image'] = $this->uploadImage($request);
        $courseService->store($validates);
        return redirect()->back();
    }

    public function course(Course $course)
    {
        $course->load([ 'modules.lectures' ,
            'modules' => function ($q) {
                $q->withCount('lectures');
            }
        ]);
        return view('teacher.course', ['course' => $course]);
    }
}
