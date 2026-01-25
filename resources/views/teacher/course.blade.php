@extends('layouts.teacher.main')

@section('content')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2F6FED',
                        lightBlue: '#EAF1FF',
                        darkBlue: '#1F3A8A',
                        borderGray: '#E5E7EB',
                        textGray: '#6B7280'
                    },
                    boxShadow: {
                        card: '0 10px 25px rgba(0,0,0,0.05)'
                    }
                }
            }
        }
    </script>

    <div class="flex min-h-screen">
        <x-teacher.sidebar-component />
        @if ($course)
            <div class="flex-1 w-full px-6 py-6 overflow-y-auto">

                <!-- Header -->
                <div class="mb-10 flex justify-between items-center">
                    <div>
                        <h1 class="text-[28px] font-bold text-darkBlue mb-1">
                            Edit Course
                        </h1>
                        <p class="text-textGray text-sm">
                            Organize modules and lessons
                        </p>
                    </div>

                    <button class="h-[44px] px-6 bg-primary text-white rounded-[10px] font-medium">
                        Save Changes
                    </button>
                </div>

                <!-- Course Name -->
                <div class="bg-white rounded-[14px] shadow-card p-6 mb-8">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-9 h-9 rounded-lg bg-lightBlue flex items-center justify-center">
                            📘
                        </div>
                        <h2 class="font-semibold">Course Name</h2>
                    </div>

                    <input type="text" value="{{ $course->name }}"
                        class="w-full h-[44px] rounded-[8px] border border-borderGray px-4
                   focus:outline-none focus:border-primary focus:ring-2 focus:ring-blue-100" />
                </div>

                <!-- Modules -->
                <div class="space-y-6">

                    <!-- Module -->
                    @if ($course->modules->isNotEmpty())
                        @foreach ($course->modules as $model)
                            <div class="bg-white rounded-[14px] shadow-card overflow-hidden">

                                <!-- Module Header -->
                                <button onclick="toggleModule({{ $model->id }})"
                                    class="w-full p-6 flex justify-between items-center hover:bg-[#F9FAFB] transition">

                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-lg bg-lightBlue flex items-center justify-center">
                                            📦
                                        </div>
                                        <div class="text-left">
                                            <h3 class="font-semibold text-[18px]">
                                                {{ $model->name }}
                                            </h3>
                                            <p class="text-sm text-textGray">
                                                {{ $model->lectures_count }} Lessons
                                            </p>
                                        </div>
                                    </div>

                                    <span id="icon-{{ $model->id }}" class="text-xl">+</span>
                                </button>

                                <!-- Content -->
                                <div id="module-{{ $model->id }}"
                                    class="hidden border-t border-borderGray px-6 py-4 space-y-3">
                                    @if ($model->lectures->isNotEmpty())
                                        @foreach ($model->lectures as $lecture)
                                            <div
                                                class="flex items-center justify-between bg-lightBlue rounded-lg px-4 py-3 hover:bg-blue-100 transition">
                                                <div class="flex items-center gap-3">
                                                    <span class="w-2 h-2 bg-primary rounded-full"></span>
                                                    <span>{{ $lecture->name }}</span>
                                                </div>
                                                <button class="text-primary text-sm font-medium">Edit</button>
                                            </div>
                                        @endforeach
                                    @endif
                                    <!-- Lesson -->

                                    <button class="text-primary text-sm font-medium mt-3" onclick="window.location.href = '{{ route('lectures.create') }}'">
                                        + Add Lesson
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>

                <!-- Add Module -->
                <div class="mt-8">
                    <button class="text-primary font-medium"
                        onclick="window.location.href = '{{ route('teacher.module.create', $course->id) }}'">
                        + Add New Module
                    </button>
                </div>

            </div>
        @endif

        <script>
            function toggleModule(id) {
                const el = document.getElementById(`module-${id}`);
                const icon = document.getElementById(`icon-${id}`);

                el.classList.toggle('hidden');
                icon.textContent = el.classList.contains('hidden') ? '+' : '−';
            }
        </script>
    </div>
@endsection
