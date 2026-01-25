<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart LMS – Dashboard</title>
    <link rel="icon" href="{{ asset('lms.jpg') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2F6FED',
                        lightBlue: '#EAF1FF',
                        darkBlue: '#1F3A8A',
                        borderGray: '#E5E7EB',
                        textGray: '#6B7280'
                    },
                    boxShadow: {
                        card: '0 10px 25px rgba(0,0,0,0.05)'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-[#F5F7FB] font-sans text-[#111827]">

    @yield('content')

</body>

</html>
