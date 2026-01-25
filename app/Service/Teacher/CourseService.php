<?php

namespace App\Service\Teacher;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseService
{
    public function store(array $data)
    {
        $data['is_active'] = 1;
        $data['auther_id'] = Auth::guard('teacher')->id();
        return Course::create($data);
    }
}
