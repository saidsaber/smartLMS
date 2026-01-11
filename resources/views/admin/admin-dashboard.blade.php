@extends('layouts.admin.main')

@section('content')
    <div class="flex">

        <!-- Sidebar -->
        <x-admin.sidebar-component/>

        <!-- Content -->
        <main class="flex-1 p-8">

            <h2 class="text-2xl font-bold mb-6">Dashboard</h2>

            <!-- Stats Cards -->
            <div class="grid grid-cols-4 gap-6 mb-8">

                <div class="bg-white p-5 rounded-[14px] shadow">
                    <p class="text-sm text-textGray">Total Users</p>
                    <h3 class="text-2xl font-bold mt-2">1,240</h3>
                </div>

                <div class="bg-white p-5 rounded-[14px] shadow">
                    <p class="text-sm text-textGray">Active Courses</p>
                    <h3 class="text-2xl font-bold mt-2">86</h3>
                </div>

                <div class="bg-white p-5 rounded-[14px] shadow">
                    <p class="text-sm text-textGray">Exams Today</p>
                    <h3 class="text-2xl font-bold mt-2">12</h3>
                </div>

                <div class="bg-white p-5 rounded-[14px] shadow">
                    <p class="text-sm text-textGray">Revenue</p>
                    <h3 class="text-2xl font-bold mt-2">$4,320</h3>
                </div>

            </div>

        </main>
    </div>
@endsection
