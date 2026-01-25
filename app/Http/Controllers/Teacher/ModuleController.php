<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ModuleController extends Controller
{
    public function module(Course $course)
    {
        return view('teacher.meduleform', ['course' => $course]);
    }

    public function save(Request $request, Course $course)
    {
        $validate = $request->validate([
            'name' => 'required|min:4|string'
        ]);
        $course->modules()->create($validate);
        return redirect()->back();
    }
}
