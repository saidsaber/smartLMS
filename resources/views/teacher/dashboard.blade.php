@extends('layouts.teacher.main')

@section('content')
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <x-teacher.sidebar-component />

        <!-- Main Content -->
        <div class="flex-1">

            <!-- Header -->
            <header class="h-16 bg-white border-b border-[#E5E7EB] flex items-center px-6">
                <h1 class="text-xl font-semibold">Dashboard</h1>
            </header>

            <!-- Content -->
            <main class="p-6 max-w-[1200px] mx-auto">

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- My Courses -->
                    <div class="bg-white p-5 rounded-[14px] shadow-[0_10px_25px_rgba(0,0,0,0.05)]">
                        <p class="text-sm text-[#6B7280]">My Courses</p>
                        <h2 class="text-3xl font-bold mt-2">8</h2>
                        <a href="{{ route('teacher.mycourses') }}" class="text-[#2F6FED] text-sm mt-3 inline-block">
                            View Courses →
                        </a>
                    </div>

                    <!-- Students -->
                    <div class="bg-white p-5 rounded-[14px] shadow-[0_10px_25px_rgba(0,0,0,0.05)]">
                        <p class="text-sm text-[#6B7280]">Students</p>
                        <h2 class="text-3xl font-bold mt-2">245</h2>
                        <a href="{{ route('teacher.students') }}" class="text-[#2F6FED] text-sm mt-3 inline-block">
                            View Students →
                        </a>
                    </div>

                    <!-- Earnings -->
                    <div class="bg-white p-5 rounded-[14px] shadow-[0_10px_25px_rgba(0,0,0,0.05)]">
                        <p class="text-sm text-[#6B7280]">Earnings</p>
                        <h2 class="text-3xl font-bold text-[#22C55E] mt-2">$1,820</h2>
                        <a href="earnings.html" class="text-[#2F6FED] text-sm mt-3 inline-block">
                            View Earnings →
                        </a>
                    </div>

                </div>

            </main>
        </div>

    </div>
@endsection
