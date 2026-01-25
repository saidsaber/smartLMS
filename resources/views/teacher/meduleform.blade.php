@extends('layouts.teacher.main')

@section('content')

<div class="flex min-h-screen bg-[#F5F7FB]">

    <!-- Sidebar -->
    <x-teacher.sidebar-component />

    <!-- Main Content -->
    <div class="flex-1 w-full px-6 py-6 overflow-y-auto">

        <!-- Centered Container -->
        <div class="max-w-3xl mx-auto">

            <!-- Card -->
            <div class="bg-white rounded-[14px] shadow-card p-8 mt-10">

                <!-- Header -->
                <div class="mb-6">
                    <h3 class="text-[22px] font-semibold text-darkBlue">
                        Create New Module
                    </h3>
                    <p class="text-sm text-textGray mt-1">
                        Add a new module to organize your course content
                    </p>
                </div>

                <!-- Form -->
                <form class="space-y-5" method="post" action="{{ route('post.teacher.module.create' , $course->id) }}">
                    @csrf

                    <!-- Module Name -->
                    <div>
                        <label class="block text-sm font-medium mb-1">
                            Module Name
                        </label>
                        <input
                            type="text" name="name"
                            placeholder="e.g. PHP Basics"
                            class="w-full h-[44px] rounded-[8px] border border-borderGray px-4
                                   focus:outline-none focus:border-primary focus:ring-2 focus:ring-blue-100"
                        />
                    </div>

                    <!-- Description -->
                    {{-- <div>
                        <label class="block text-sm font-medium mb-1">
                            Description <span class="text-textGray">(optional)</span>
                        </label>
                        <textarea
                            rows="4"
                            placeholder="Short description about this module"
                            class="w-full rounded-[8px] border border-borderGray px-4 py-3
                                   focus:outline-none focus:border-primary focus:ring-2 focus:ring-blue-100"
                        ></textarea>
                    </div> --}}

                    <!-- Actions -->
                    <div class="flex justify-end gap-3 pt-4 border-t border-borderGray">
                        <button
                            type="button"
                            class="h-[44px] px-6 rounded-[10px] border border-borderGray text-textGray hover:bg-gray-50">
                            Cancel
                        </button>

                        <button
                            type="submit"
                            class="h-[44px] px-6 rounded-[10px] bg-primary text-white font-medium hover:opacity-90">
                            Create Module
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>

@endsection
