@extends('layouts.teacher.main')

@section('content')
    <div class="flex mt-6 space-x-6">

        <!-- Sidebar -->
        <div class="w-1/4">
            <x-teacher.sidebar-component />
        </div>

        <!-- Main Content -->
        <div class="w-3/4">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-6">Create Lecture</h2>

                @if (session('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('lectures.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    <!-- Name and Price Row -->
                    <div class="flex space-x-4">
                        <div class="flex-1">
                            <label for="name" class="block text-gray-700 font-medium mb-1">Lecture Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter lecture name" required
                                value="{{ old('name') }}"
                                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        </div>
                        @error('name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description" class="block text-gray-700 font-medium mb-1">Description</label>
                        <textarea name="description" id="description" rows="4" placeholder="Enter lecture description"
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">{{ old('name') }}</textarea>
                        @error('description')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Video Upload -->
                    <div>
                        <label for="video" class="block text-gray-700 font-medium mb-1">Video</label>
                        <input type="file" name="video" id="video" accept="video/*" required
                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                        @error('video')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="bg-blue-600 text-white font-semibold px-6 py-2 rounded hover:bg-blue-700 transition-colors">
                        Create Lecture
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
