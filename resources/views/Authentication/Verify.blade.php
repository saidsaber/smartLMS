<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Account | Smart LMS</title>
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

        .verify-card {
            background: #FFFFFF;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        /* Specific style for OTP digits */
        .otp-input {
            width: 100%;
            height: 56px;
            text-align: center;
            font-size: 1.25rem;
            font-weight: 700;
            border-radius: 10px;
            border: 2px solid var(--border-gray);
            transition: all 0.2s ease;
        }

        .otp-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            background-color: var(--light-blue);
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
                <img src="https://illustrations.popsy.co/blue/message-sent.svg" alt="Email verification" class="w-full mb-8">
                <h2 class="text-[var(--dark-blue)] text-2xl font-bold mb-3">Check Your Inbox</h2>
                <p class="text-[var(--text-gray)] text-base leading-relaxed">
                    We've sent a 6-digit security code to your email. Please enter it to secure your account.
                </p>
            </div>
        </div>

        <div class="w-full flex flex-col">
            <div class="mb-8 text-center lg:text-left">
                <div class="flex items-center justify-center lg:justify-start gap-2 mb-6">
                    <div class="w-10 h-10 bg-[var(--primary-blue)] rounded-lg flex items-center justify-center">
                        <i data-lucide="shield-check" class="text-white w-6 h-6"></i>
                    </div>
                    <span class="text-xl font-bold tracking-tight">Smart <span class="text-[var(--primary-blue)]">LMS</span></span>
                </div>
                
                <h1 class="text-[28px] font-bold text-[var(--main-text)] mb-2">Verify Your Email</h1>
                <p class="text-[var(--text-gray)] text-base">We sent a code to <span class="text-[var(--main-text)] font-semibold">student@example.com</span></p>
            </div>

            <div class="verify-card p-6 md:p-10 w-full max-w-md mx-auto lg:ml-0">
                <form action="#" id="otp-form" class="space-y-8" onsubmit="return false;">
                    
                    <div class="flex justify-between gap-2">
                        <input type="text" maxlength="1" class="otp-input" pattern="\d*" inputmode="numeric">
                        <input type="text" maxlength="1" class="otp-input" pattern="\d*" inputmode="numeric">
                        <input type="text" maxlength="1" class="otp-input" pattern="\d*" inputmode="numeric">
                        <input type="text" maxlength="1" class="otp-input" pattern="\d*" inputmode="numeric">
                        <input type="text" maxlength="1" class="otp-input" pattern="\d*" inputmode="numeric">
                        <input type="text" maxlength="1" class="otp-input" pattern="\d*" inputmode="numeric">
                    </div>

                    <button type="submit" class="btn-primary w-full flex items-center justify-center gap-2">
                        Verify Account
                    </button>
                </form>

                <div class="mt-8 pt-6 border-t border-[var(--border-gray)] text-center">
                    <p class="text-[var(--text-gray)] text-sm">
                        Didn't receive the code? 
                        <button class="text-[var(--primary-blue)] font-semibold hover:underline ml-1">Resend Code</button>
                    </p>
                </div>
            </div>

            <div class="mt-8 flex items-start gap-4 p-4 bg-[var(--light-blue)]/60 rounded-[14px] w-full max-w-md mx-auto lg:ml-0 border border-[var(--primary-blue)]/10">
                <div class="bg-white p-2 rounded-lg shadow-sm">
                    <span class="text-lg">✨</span>
                </div>
                <div>
                    <h4 class="text-sm font-semibold text-[var(--dark-blue)]">Verification Tip</h4>
                    <p class="text-xs text-[var(--text-gray)] leading-relaxed mt-0.5">
                        If you don't see the email, I suggest checking your <strong>Spam</strong> or <strong>Promotions</strong> folder. Codes usually arrive within 60 seconds!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();

        // OTP Auto-focus logic
        const inputs = document.querySelectorAll('.otp-input');
        
        inputs.forEach((input, index) => {
            input.addEventListener('keyup', (e) => {
                if (e.key >= 0 && e.key <= 9) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                } else if (e.key === 'Backspace') {
                    if (index > 0) {
                        inputs[index - 1].focus();
                    }
                }
            });
        });
    </script>
</body>
</html>