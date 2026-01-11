@extends('layouts.admin.main')

@section('content')
    <div class="flex">
        <x-admin.sidebar-component />
        <main class="flex-1 p-8">

            <!-- Page Header -->
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold">All Users</h2>
                    <p class="text-sm text-textGray">Manage platform users</p>
                </div>

                <button onclick="window.location.href = '{{ route('admin.users.form') }}'" class="h-11 px-6 bg-primary text-white rounded-lg font-medium">
                    + Create User
                </button>
            </div>

            <!-- Filters -->
            @livewire('admin.all-users-livewire')

        </main>
    </div>
@endsection
