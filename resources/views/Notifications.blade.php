<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications | Smart LMS</title>
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
            --success: #22C55E;
            --warning: #F59E0B;
            --danger: #EF4444;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--page-bg);
            color: var(--main-text);
        }

        .card {
            background: #FFFFFF;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .notification-item {
            transition: all 0.2s ease;
            border-bottom: 1px solid var(--border-gray);
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-item.unread {
            background-color: #F9FBFF;
        }

        .notification-item.unread::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: var(--primary-blue);
        }

        .filter-btn.active {
            background-color: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
        }
    </style>
</head>
<body class="min-h-screen">

    <header class="bg-white border-b border-[var(--border-gray)] sticky top-0 z-50 px-6 py-4">
        <div class="max-w-[1000px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <button class="p-2 hover:bg-[var(--page-bg)] rounded-lg transition-colors">
                    <i data-lucide="arrow-left" class="w-5 h-5 text-[var(--text-gray)]"></i>
                </button>
                <h1 class="text-sm font-bold text-[var(--dark-blue)]">Notifications</h1>
            </div>
            <button class="text-xs font-semibold text-[var(--primary-blue)] hover:underline">
                Mark all as read
            </button>
        </div>
    </header>

    <main class="max-w-[1000px] mx-auto p-4 md:p-6 space-y-6">
        
        <div class="flex gap-2 overflow-x-auto pb-2 custom-scrollbar">
            <button class="filter-btn active px-4 py-2 rounded-lg border border-[var(--border-gray)] text-xs font-medium whitespace-nowrap">All</button>
            <button class="filter-btn px-4 py-2 bg-white rounded-lg border border-[var(--border-gray)] text-xs font-medium text-[var(--text-gray)] whitespace-nowrap">Courses</button>
            <button class="filter-btn px-4 py-2 bg-white rounded-lg border border-[var(--border-gray)] text-xs font-medium text-[var(--text-gray)] whitespace-nowrap">AI Updates</button>
            <button class="filter-btn px-4 py-2 bg-white rounded-lg border border-[var(--border-gray)] text-xs font-medium text-[var(--text-gray)] whitespace-nowrap">System</button>
        </div>

        <div class="card overflow-hidden">
            <div class="flex flex-col">
                
                <div class="notification-item unread relative p-5 flex gap-4">
                    <div class="flex-shrink-0 w-10 h-10 bg-[var(--light-blue)] rounded-full flex items-center justify-center text-[var(--primary-blue)]">
                        <i data-lucide="sparkles" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-grow space-y-1">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-bold text-[var(--main-text)]">AI Insights: New Learning Path</h4>
                            <span class="text-[10px] text-[var(--text-gray)] font-medium">2 mins ago</span>
                        </div>
                        <p class="text-xs text-[var(--text-gray)] leading-relaxed">
                            Based on your quiz performance in <span class="font-semibold">Visual Hierarchy</span>, we've generated a personalized study guide for you.
                        </p>
                        <div class="pt-2">
                            <button class="px-3 py-1.5 bg-[var(--primary-blue)] text-white text-[11px] font-bold rounded-md shadow-sm">View Guide</button>
                        </div>
                    </div>
                </div>

                <div class="notification-item unread relative p-5 flex gap-4">
                    <div class="flex-shrink-0 w-10 h-10 bg-green-50 rounded-full flex items-center justify-center text-[var(--success)]">
                        <i data-lucide="book-open" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-grow space-y-1">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-bold text-[var(--main-text)]">New Lesson Available</h4>
                            <span class="text-[10px] text-[var(--text-gray)] font-medium">1 hour ago</span>
                        </div>
                        <p class="text-xs text-[var(--text-gray)] leading-relaxed">
                            Instructor <span class="font-semibold">Sarah Jenkins</span> uploaded "Lesson 5: Typography Systems" to UI/UX Fundamentals.
                        </p>
                    </div>
                </div>

                <div class="notification-item p-5 flex gap-4">
                    <div class="flex-shrink-0 w-10 h-10 bg-orange-50 rounded-full flex items-center justify-center text-[var(--warning)]">
                        <i data-lucide="alert-circle" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-grow space-y-1">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-bold text-[var(--main-text)]">Subscription Renewal</h4>
                            <span class="text-[10px] text-[var(--text-gray)] font-medium">Yesterday</span>
                        </div>
                        <p class="text-xs text-[var(--text-gray)] leading-relaxed">
                            Your Smart LMS Pro subscription will renew in 3 days. Ensure your payment method is up to date.
                        </p>
                    </div>
                </div>

                <div class="notification-item p-5 flex gap-4">
                    <div class="flex-shrink-0 w-10 h-10 bg-purple-50 rounded-full flex items-center justify-center text-purple-600">
                        <i data-lucide="award" class="w-5 h-5"></i>
                    </div>
                    <div class="flex-grow space-y-1">
                        <div class="flex justify-between items-start">
                            <h4 class="text-sm font-bold text-[var(--main-text)]">Achievement Unlocked!</h4>
                            <span class="text-[10px] text-[var(--text-gray)] font-medium">2 days ago</span>
                        </div>
                        <p class="text-xs text-[var(--text-gray)] leading-relaxed">
                            Congratulations! You've earned the <span class="font-semibold text-purple-700">7-Day Streak</span> badge for consistent learning.
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="flex justify-center pt-4">
            <button class="flex items-center gap-2 text-xs font-semibold text-[var(--text-gray)] hover:text-[var(--primary-blue)] transition-colors">
                <i data-lucide="settings" class="w-4 h-4"></i>
                Configure notification preferences
            </button>
        </div>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>