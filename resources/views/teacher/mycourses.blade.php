@extends('layouts.teacher.main')

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-teacher.sidebar-component />

        <!-- Main Content -->
        <div class="flex-1">

            <!-- Header -->
            <header class="h-16 bg-white border-b border-[#E5E7EB] flex items-center px-6">
                <h1 class="text-xl font-semibold">My Courses</h1>
            </header>

            <!-- Content -->
            <main class="p-6 max-w-[1200px] mx-auto">

                <!-- Top Action -->
                <div class="flex justify-end mb-6">
                    <button onclick="window.location.href = '{{ route('teacher.courses.create') }}'"
                        class="h-11 px-6 bg-[#2F6FED] text-white rounded-[10px] font-medium">
                        + Create Course
                    </button>
                </div>

                <!-- Courses Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @if ($courses && $courses->isNotEmpty())
                        @foreach ($courses as $course)
                            <div class="bg-white rounded-[14px] shadow-[0_10px_25px_rgba(0,0,0,0.05)] overflow-hidden">

                                <img src="{{ asset('uploads/products/' . $course->image) }}" alt="Course Image"
                                    class="w-full h-40 object-cover" />

                                <div class="p-4">
                                    <h3 class="text-lg font-semibold mb-4">
                                        {{ $course->name }}
                                    </h3>

                                    <button onclick="window.location.href = '{{ route('teacher.courses.course' , $course->id) }}'"
                                        class="w-full h-11 border border-[#E5E7EB]
                   rounded-[10px] text-[#2F6FED] font-medium
                   hover:bg-[#EAF1FF]">
                                        Edit Course
                                    </button>
                                </div>

                            </div>
                        @endforeach
                    @endif
                    <!-- Course Card -->

                </div>

            </main>
        </div>

    </div>
@endsection
