<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Smart LMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        /* Applying Design System Foundations */
        :root {
            --primary-blue: #2F6FED;
            --light-blue: #EAF1FF;
            --dark-blue: #1F3A8A;
            --page-bg: #F5F7FB;
            --border-gray: #E5E7EB;
            --text-gray: #6B7280;
            --main-text: #111827;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--page-bg);
            color: var(--main-text);
        }

        .login-card {
            background: #FFFFFF;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .input-field {
            height: 44px;
            border-radius: 8px;
            border: 1px solid var(--border-gray);
            transition: all 0.2s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px rgba(47, 111, 237, 0.1);
        }

        .btn-primary {
            background-color: var(--primary-blue);
            height: 44px;
            border-radius: 10px;
            color: #FFFFFF;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background-color: #2459c2;
            transform: translateY(-1px);
        }

        .btn-secondary {
            height: 44px;
            border-radius: 10px;
            border: 1px solid var(--border-gray);
            background: #FFFFFF;
            color: var(--main-text);
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-secondary:hover {
            background-color: var(--page-bg);
            border-color: #D1D5DB;
        }

        .illustration-container {
            background-color: var(--light-blue);
            border-radius: 24px;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-8">

    <div class="max-w-[1200px] w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        
        <div class="hidden lg:flex flex-col items-center justify-center p-12 illustration-container h-full">
            <div class="text-center max-w-sm">
                <img src="https://illustrations.popsy.co/blue/studying.svg" alt="Student studying" class="w-full mb-8">
                <h2 class="text-[var(--dark-blue)] text-2xl font-bold mb-3">Master New Skills</h2>
                <p class="text-[var(--text-gray)] text-base leading-relaxed">
                    Join our community of learners and access AI-guided courses tailored just for you.
                </p>
            </div>
        </div>

        <div class="w-full flex flex-col">
            <div class="mb-8 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 mb-6">
                    <div class="w-10 h-10 bg-[var(--primary-blue)] rounded-lg flex items-center justify-center">
                        <i data-lucide="graduation-cap" class="text-white w-6 h-6"></i>
                    </div>
                    <span class="text-xl font-bold tracking-tight">Smart <span class="text-[var(--primary-blue)]">LMS</span></span>
                </div>
                
                <h1 class="text-[28px] font-bold text-[var(--main-text)] mb-2">Welcome Back</h1>
                <p class="text-[var(--text-gray)] text-base">Please enter your details to sign in.</p>
            </div>

            <div class="login-card p-6 md:p-10 w-full max-w-md mx-auto lg:ml-0">
                <form action="#" class="space-y-5" onsubmit="return false;">
                    <div>
                        <label class="block text-[var(--dark-blue)] text-sm font-medium mb-1.5">Email Address</label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-[#9CA3AF]">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </span>
                            <input type="email" placeholder="name@company.com" class="input-field w-full pl-10 pr-4 text-sm">
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center mb-1.5">
                            <label class="block text-[var(--dark-blue)] text-sm font-medium">Password</label>
                            <a href="#" class="text-[var(--primary-blue)] text-sm font-medium hover:underline">Forgot password?</a>
                        </div>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-[#9CA3AF]">
                                <i data-lucide="lock" class="w-5 h-5"></i>
                            </span>
                            <input type="password" placeholder="••••••••" class="input-field w-full pl-10 pr-4 text-sm">
                        </div>
                    </div>

                    <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                        Sign In
                    </button>

                    <div class="relative flex items-center py-2">
                        <div class="flex-grow border-t border-[var(--border-gray)]"></div>
                        <span class="flex-shrink mx-4 text-[var(--text-gray)] text-[11px] font-semibold uppercase tracking-widest">Or continue with</span>
                        <div class="flex-grow border-t border-[var(--border-gray)]"></div>
                    </div>

                    <button type="button" class="btn-secondary w-full flex items-center justify-center gap-3">
                        <svg width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-1 .67-2.28 1.07-3.71 1.07-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.11c-.22-.67-.35-1.39-.35-2.11s.13-1.44.35-2.11V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.83z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.66l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.83c.87-2.6 3.3-4.51 6.16-4.51z" fill="#EA4335"/>
                        </svg>
                        Sign in with Google
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-[var(--border-gray)] text-center">
                    <p class="text-[var(--text-gray)] text-sm">
                        Don’t have an account? 
                        <a href="#" class="text-[var(--primary-blue)] font-semibold hover:underline">Create account</a>
                    </p>
                </div>
            </div>

            <div class="mt-8 flex items-start gap-4 p-4 bg-[var(--light-blue)]/60 rounded-[14px] w-full max-w-md mx-auto lg:ml-0 border border-[var(--primary-blue)]/10">
                <div class="bg-white p-2 rounded-lg shadow-sm">
                    <span class="text-lg">✨</span>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-[var(--dark-blue)]">Support Assistant</h4>
                    <p class="text-xs text-[var(--text-gray)] leading-relaxed mt-0.5">
                        Need help logging in? Click the help bubble in the bottom corner to recover your account instantly.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>