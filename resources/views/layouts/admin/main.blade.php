<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart LMS – Admin Dashboard</title>
    <link rel="icon" href="{{ asset('lms.jpg') }}" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2F6FED',
                        lightBg: '#F5F7FB',
                        borderGray: '#E5E7EB',
                        textGray: '#6B7280',
                        success: '#22C55E',
                        warning: '#F59E0B',
                        danger: '#EF4444'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-lightBg font-sans">

    <!-- Header -->
    <header class="bg-white h-16 flex items-center justify-between px-8 shadow-sm">
        <h1 class="font-bold text-primary text-lg">Smart LMS – Admin</h1>

        <div class="flex items-center gap-4">
            <span class="text-sm text-textGray">Admin</span>
            <div class="w-8 h-8 bg-primary rounded-full"></div>
        </div>
    </header>

    <!-- Main Layout -->
    @yield('content')

</body>

</html>
