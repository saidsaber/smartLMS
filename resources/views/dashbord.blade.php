<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Smart LMS</title>
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

        .card {
            background: #FFFFFF;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .progress-bar {
            height: 8px;
            background-color: var(--border-gray);
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background-color: var(--primary-blue);
            border-radius: 4px;
        }

        .sidebar-ai {
            background-color: var(--light-blue);
            border: 1px solid rgba(47, 111, 237, 0.1);
        }

        header {
            border-bottom: 1px solid var(--border-gray);
            background: #FFFFFF;
        }
    </style>
</head>
<body class="min-h-screen">

    <header class="sticky top-0 z-50 w-full px-6 py-4">
        <div class="max-w-[1200px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-[var(--primary-blue)] rounded-lg flex items-center justify-center">
                        <i data-lucide="graduation-cap" class="text-white w-5 h-5"></i>
                    </div>
                    <span class="text-lg font-bold">Smart <span class="text-[var(--primary-blue)]">LMS</span></span>
                </div>
                <h1 class="hidden md:block text-lg font-semibold text-[var(--dark-blue)]">Dashboard</h1>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden sm:flex items-center bg-[var(--page-bg)] border border-[var(--border-gray)] rounded-lg px-3 py-1.5 w-64">
                    <i data-lucide="search" class="w-4 h-4 text-[var(--text-gray)] mr-2"></i>
                    <input type="text" placeholder="Search courses..." class="bg-transparent text-sm outline-none w-full">
                </div>
                <button class="p-2 hover:bg-[var(--page-bg)] rounded-full relative">
                    <i data-lucide="bell" class="w-5 h-5 text-[var(--text-gray)]"></i>
                    <span class="absolute top-2 right-2 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                </button>
                <div class="flex items-center gap-2 ml-2 cursor-pointer border-l pl-4 border-[var(--border-gray)]">
                    <img src="https://ui-avatars.com/api/?name=Alex+Smith&background=EAF1FF&color=2F6FED" alt="Avatar" class="w-8 h-8 rounded-full border">
                    <span class="hidden md:block text-sm font-medium">Alex Smith</span>
                    <i data-lucide="chevron-down" class="w-4 h-4 text-[var(--text-gray)]"></i>
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1200px] mx-auto p-6">
        
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            
            <div class="lg:col-span-3 space-y-8">
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    <div class="card p-5 flex items-center gap-4">
                        <div class="w-12 h-12 bg-[var(--light-blue)] text-[var(--primary-blue)] rounded-xl flex items-center justify-center">
                            <i data-lucide="book-open" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-[var(--text-gray)] text-xs font-medium">Enrolled Courses</p>
                            <h3 class="text-xl font-bold">12</h3>
                        </div>
                    </div>
                    <div class="card p-5 flex items-center gap-4">
                        <div class="w-12 h-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center">
                            <i data-lucide="check-circle" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-[var(--text-gray)] text-xs font-medium">Completed Lessons</p>
                            <h3 class="text-xl font-bold">48</h3>
                        </div>
                    </div>
                    <div class="card p-5 flex items-center gap-4">
                        <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center">
                            <i data-lucide="bar-chart" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <p class="text-[var(--text-gray)] text-xs font-medium">Overall Progress</p>
                            <h3 class="text-xl font-bold">76%</h3>
                        </div>
                    </div>
                </div>

                <div class="bg-[var(--light-blue)] border border-[var(--primary-blue)]/10 rounded-[14px] p-5 flex items-start gap-4">
                    <div class="mt-1"><i data-lucide="megaphone" class="text-[var(--primary-blue)] w-5 h-5"></i></div>
                    <div class="flex-grow">
                        <div class="flex justify-between items-center mb-1">
                            <h4 class="font-semibold text-sm">New Midterm Schedule Posted</h4>
                            <span class="text-[10px] uppercase font-bold text-[var(--text-gray)] tracking-wide">Admin • 2h ago</span>
                        </div>
                        <p class="text-sm text-[var(--text-gray)] mb-2">The engineering department has released the updated exam schedule for June. Please review it.</p>
                        <a href="#" class="text-[var(--primary-blue)] text-xs font-bold hover:underline">Read more</a>
                    </div>
                </div>

                <div>
                    <div class="flex justify-between items-end mb-4">
                        <h2 class="text-[18px] font-bold text-[var(--dark-blue)]">My Courses</h2>
                        <a href="#" class="text-sm text-[var(--primary-blue)] font-medium">View All</a>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="card overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?w=500&auto=format&fit=crop" class="w-full h-32 object-cover" alt="Course">
                            <div class="p-5">
                                <h3 class="font-bold text-[16px] mb-1 group-hover:text-[var(--primary-blue)] transition-colors">UI/UX Design Fundamentals</h3>
                                <p class="text-xs text-[var(--text-gray)] mb-4">Instructor: Sarah Drasner</p>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-semibold">Progress</span>
                                    <span class="text-xs font-bold text-[var(--primary-blue)]">65%</span>
                                </div>
                                <div class="progress-bar mb-5">
                                    <div class="progress-fill" style="width: 65%"></div>
                                </div>
                                <button class="w-full bg-[var(--primary-blue)] text-white py-2.5 rounded-[10px] text-sm font-medium">Continue Learning</button>
                            </div>
                        </div>
                        <div class="card overflow-hidden group">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=500&auto=format&fit=crop" class="w-full h-32 object-cover" alt="Course">
                            <div class="p-5">
                                <h3 class="font-bold text-[16px] mb-1 group-hover:text-[var(--primary-blue)] transition-colors">Advanced JavaScript ES6+</h3>
                                <p class="text-xs text-[var(--text-gray)] mb-4">Instructor: Kyle Simpson</p>
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-semibold">Progress</span>
                                    <span class="text-xs font-bold text-[var(--primary-blue)]">20%</span>
                                </div>
                                <div class="progress-bar mb-5">
                                    <div class="progress-fill" style="width: 20%"></div>
                                </div>
                                <button class="w-full bg-[var(--primary-blue)] text-white py-2.5 rounded-[10px] text-sm font-medium">Continue Learning</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-6">
                <div class="card sidebar-ai p-5">
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-lg">✨</span>
                        <h4 class="font-bold text-sm text-[var(--dark-blue)]">AI Assistant</h4>
                    </div>
                    <p class="text-xs text-[var(--text-gray)] leading-relaxed mb-4">
                        "You have a UI/UX assignment due in 2 days. Should we start reviewing the core principles?"
                    </p>
                    <button class="w-full bg-white text-[var(--primary-blue)] border border-[var(--primary-blue)]/20 py-2 rounded-lg text-xs font-bold hover:bg-[var(--primary-blue)] hover:text-white transition-all">
                        Chat with Assistant
                    </button>
                </div>

                <div class="card p-5">
                    <h4 class="font-bold text-sm mb-4">Today's Tasks</h4>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-2 h-2 rounded-full bg-orange-500"></div>
                            <div>
                                <p class="text-sm font-semibold">UI Design Quiz</p>
                                <p class="text-[10px] text-[var(--text-gray)]">Due: 11:59 PM</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-2 h-2 rounded-full bg-[var(--primary-blue)]"></div>
                            <div>
                                <p class="text-sm font-semibold">Live Q&A Session</p>
                                <p class="text-[10px] text-[var(--text-gray)]">Starts: 4:00 PM</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="mt-1 w-2 h-2 rounded-full bg-green-500"></div>
                            <div>
                                <p class="text-sm font-semibold">Research Paper</p>
                                <p class="text-[10px] text-[var(--text-gray)]">Completed</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-5 bg-gradient-to-br from-[#1F3A8A] to-[#2F6FED] text-white">
                    <p class="text-[10px] font-bold uppercase tracking-widest opacity-80 mb-1">Study Streak</p>
                    <div class="flex items-center gap-2">
                        <i data-lucide="flame" class="w-6 h-6 text-orange-400"></i>
                        <h3 class="text-2xl font-bold">7 Days</h3>
                    </div>
                    <p class="text-[11px] mt-2 opacity-90">Keep it up! You're in the top 5% of learners this week.</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>