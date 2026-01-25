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

                <form action="{{ route('post.teacher.courses.create') }}" method="POST" enctype="multipart/form-data"
                    class="max-w-lg bg-white p-6 rounded-xl shadow space-y-4" novalidate>

                    @csrf

                    <!-- Course Name -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Course Name</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                            placeholder="Enter course name" required>
                        @error('name')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Description</label>
                        <textarea name="description" rows="4"
                            class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                            placeholder="Enter course description" required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Price ($)</label>
                        <input type="number" name="price" step="0.01" value="{{ old('price') }}"
                            class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                            placeholder="Enter course price" required>
                        @error('price')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div>
                        <label class="block text-sm font-medium mb-1">Course Image</label>
                        <input type="file" name="image" class="w-full border rounded-lg px-3 py-2 bg-white"
                            accept="image/*" required>
                        @error('image')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                        Create Course
                    </button>

                </form>

            </main>
        </div>

    </div>
@endsection
