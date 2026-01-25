@extends('layouts.teacher.main')

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-teacher.sidebar-component />

        <!-- Main Content -->
        <div class="flex-1">

            <!-- Header -->
            <header class="h-16 bg-white border-b border-[#E5E7EB] flex items-center px-6">
                <h1 class="text-xl font-semibold">Students</h1>
            </header>

            <!-- Content -->
            <main class="p-6 max-w-[1200px] mx-auto">

                <!-- Filter UI -->
                <div class="bg-white p-5 rounded-[14px] shadow-[0_10px_25px_rgba(0,0,0,0.05)] mb-6">

                    <h2 class="text-lg font-semibold mb-4">Filter Students</h2>

                    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">

                        <!-- Name -->
                        <div>
                            <label class="text-sm text-[#6B7280] mb-1 block">Student Name</label>
                            <input type="text" placeholder="Search by name"
                                class="h-11 w-full px-4 border border-[#E5E7EB] rounded-[8px]
                     outline-none focus:border-[#2F6FED]" />
                        </div>

                        <!-- Course -->
                        <div>
                            <label class="text-sm text-[#6B7280] mb-1 block">Course</label>

                            <input list="courses" placeholder="Search or select course"
                                class="h-11 w-full px-4 border border-[#E5E7EB] rounded-[8px]
           outline-none focus:border-[#2F6FED]" />

                            <datalist id="courses">
                                <option value="Laravel Basics">
                                <option value="PHP Advanced">
                                <option value="JavaScript Fundamentals">
                                <option value="UI/UX Design">
                                <option value="Data Structures">
                            </datalist>
                        </div>
                        <!-- Status -->
                        <div>
                            <label class="text-sm text-[#6B7280] mb-1 block">Status</label>
                            <select
                                class="h-11 w-full px-4 border border-[#E5E7EB] rounded-[8px]
                     outline-none focus:border-[#2F6FED] bg-white">
                                <option>All Status</option>
                                <option>Active</option>
                                <option>Pending</option>
                                <option>Blocked</option>
                            </select>
                        </div>

                        <!-- Button (UI only) -->
                        <div class="flex items-end">
                            <button class="h-11 w-full bg-[#2F6FED] text-white rounded-[10px]">
                                Apply Filter
                            </button>
                        </div>

                    </div>
                </div>

                <!-- Students Table -->
                <div class="bg-white rounded-[14px] shadow-[0_10px_25px_rgba(0,0,0,0.05)] p-5">

                    <table class="w-full text-sm">
                        <thead class="text-[#6B7280] border-b">
                            <tr>
                                <th class="text-left py-2">Name</th>
                                <th class="text-left py-2">Course</th>
                                <th class="text-left py-2">Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="border-b">
                                <td class="py-3">Ahmed Ali</td>
                                <td>Laravel Basics</td>
                                <td class="text-[#22C55E]">Active</td>
                            </tr>

                            <tr class="border-b">
                                <td class="py-3">Sara Mohamed</td>
                                <td>PHP Advanced</td>
                                <td class="text-[#F59E0B]">Pending</td>
                            </tr>

                            <tr>
                                <td class="py-3">Omar Hassan</td>
                                <td>Laravel Basics</td>
                                <td class="text-[#EF4444]">Blocked</td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </main>
        </div>

    </div>
@endsection
