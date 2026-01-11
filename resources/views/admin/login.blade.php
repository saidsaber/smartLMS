<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart LMS – Admin Login</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Design System Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2F6FED',
                        lightBg: '#F5F7FB',
                        borderGray: '#E5E7EB',
                        textGray: '#6B7280'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-lightBg min-h-screen flex items-center justify-center font-sans">

    <div class="bg-white w-full max-w-md p-8 rounded-[14px] shadow-lg">

        <!-- Logo -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-primary">Smart LMS</h1>
            <p class="text-sm text-textGray">Admin Panel Login</p>
        </div>

        <!-- Login Form -->
        <form class="space-y-4" action="{{ route('admin.login.post') }}" method="POST">
            @error('error')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
            @csrf
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" placeholder="admin@smartlms.com" name="email" value="{{ old('email') }}"
                    class="w-full h-11 px-4 border border-borderGray rounded-lg
                      focus:outline-none focus:ring-2 focus:ring-primary">
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Password</label>
                <input type="password" placeholder="••••••••" name="password"
                    class="w-full h-11 px-4 border border-borderGray rounded-lg
                      focus:outline-none focus:ring-2 focus:ring-primary">
            </div>

            <button type="submit"
                class="w-full h-11 bg-primary text-white rounded-lg
                     font-medium hover:opacity-90 transition">
                Login
            </button>

        </form>

    </div>

</body>

</html>
