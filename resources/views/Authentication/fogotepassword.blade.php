<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Smart LMS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
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

        .reset-card {
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
                <img src="https://illustrations.popsy.co/blue/searching.svg" alt="Lost password" class="w-full mb-8">
                <h2 class="text-[var(--dark-blue)] text-2xl font-bold mb-3">Forgot your password?</h2>
                <p class="text-[var(--text-gray)] text-base leading-relaxed">
                    Don't worry! It happens to the best of us. We'll help you get back into your account in no time.
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
                
                <h1 class="text-[28px] font-bold text-[var(--main-text)] mb-2">Reset Password</h1>
                <p class="text-[var(--text-gray)] text-base">Enter your email and we'll send you reset instructions.</p>
            </div>

            <div class="reset-card p-6 md:p-10 w-full max-w-md mx-auto lg:ml-0">
                <form action="#" class="space-y-6" onsubmit="return false;">
                    
                    <div>
                        <label class="block text-[var(--dark-blue)] text-sm font-medium mb-1.5">Email Address</label>
                        <div class="relative">
                            <span class="absolute left-3 top-3 text-[#9CA3AF]">
                                <i data-lucide="mail" class="w-5 h-5"></i>
                            </span>
                            <input type="email" placeholder="name@company.com" class="input-field w-full pl-10 pr-4 text-sm">
                        </div>
                    </div>

                    <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                        Send Reset Link
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-[var(--border-gray)] text-center">
                    <p class="text-[var(--text-gray)] text-sm">
                        Remember your password? 
                        <a href="#" class="text-[var(--primary-blue)] font-semibold hover:underline">Back to Login</a>
                    </p>
                </div>
            </div>

            <div class="mt-8 flex items-start gap-4 p-4 bg-[var(--light-blue)]/60 rounded-[14px] w-full max-w-md mx-auto lg:ml-0 border border-[var(--primary-blue)]/10">
                <div class="bg-white p-2 rounded-lg shadow-sm">
                    <span class="text-lg">✨</span>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-[var(--dark-blue)]">Identity Assistant</h4>
                    <p class="text-xs text-[var(--text-gray)] leading-relaxed mt-0.5">
                        If you no longer have access to this email, I can help you verify your identity using your student ID or secondary contact.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>