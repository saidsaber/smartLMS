@extends('layouts.admin.main')

@section('content')
    <div class="flex">

        <!-- Sidebar -->
        <x-admin.sidebar-component />

        <!-- Main Content -->
        <main class="flex-1 p-8">

            <!-- Page Header -->
            <div class="mb-6">
                <h2 class="text-2xl font-bold mb-1">Create / Edit User</h2>
                <p class="text-sm text-textGray">Add a new user or edit an existing user</p>
            </div>

            <!-- User Form -->
            <div class="bg-white p-8 rounded-[14px] shadow max-w-2xl">

                <form class="space-y-6" method="post" action="{{ route('admin.users.create') }}">
                    @csrf
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Full Name</label>
                        <input type="text" placeholder="Ahmed Ali" name="name" value="{{ old('name') }}"
                            class="w-full h-11 px-4 border border-borderGray rounded-lg
                        focus:outline-none focus:ring-2 focus:ring-primary">
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" placeholder="user@mail.com" name="email" value="{{ old('email') }}"
                            class="w-full h-11 px-4 border border-borderGray rounded-lg
                        focus:outline-none focus:ring-2 focus:ring-primary">
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Password</label>
                        <input type="password" placeholder="••••••••" name="password"
                            class="w-full h-11 px-4 border border-borderGray rounded-lg
                        focus:outline-none focus:ring-2 focus:ring-primary">
                        <p class="text-xs text-textGray mt-1">Leave blank to keep current password</p>
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Role -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Role</label>
                        <select class="w-full h-11 px-4 border border-borderGray rounded-lg" name="role">
                            <option {{ old('role') == 'web' ? 'selected' : '' }} value="web">Student</option>
                            <option {{ old('role') == 'teacher' ? 'selected' : '' }} value="teacher">Teacher</option>
                            <option {{ old('role') == 'admin' ? 'selected' : '' }} value="admin">Admin</option>
                        </select>
                        @error('role')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="accent-primary" name="status" value="active"
                                {{ old('status') == 'active' ? 'checked' : '' }}>
                            Active
                        </label>
                        @error('status')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full h-11 bg-primary text-white rounded-lg font-medium hover:opacity-90 transition">
                        Save User
                    </button>

                </form>
            </div>

        </main>
    </div>
@endsection
