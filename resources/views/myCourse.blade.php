<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses | Smart LMS</title>
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
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.08);
        }

        .btn-primary {
            background-color: var(--primary-blue);
            color: #FFFFFF;
            height: 44px;
            border-radius: 10px;
            padding: 0 20px;
            font-weight: 500;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background-color: #255bc2;
        }

        .progress-bar {
            height: 6px;
            background-color: var(--border-gray);
            border-radius: 3px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background-color: var(--primary-blue);
        }

        .search-input {
            height: 44px;
            border-radius: 8px;
            border: 1px solid var(--border-gray);
            padding: 0 16px 0 40px;
        }

        .search-input:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(47, 111, 237, 0.1);
        }
    </style>
</head>
<body class="min-h-screen">

    <header class="bg-white border-b border-[var(--border-gray)] sticky top-0 z-40">
        <div class="max-w-[1200px] mx-auto px-6 py-4 flex items-center justify-between">
            <div class="flex items-center gap-8">
                <div class="text-[var(--primary-blue)] font-bold text-xl flex items-center gap-2">
                    <i data-lucide="graduation-cap"></i> Smart LMS
                </div>
                <nav class="hidden md:flex gap-6 text-sm font-medium">
                    <a href="#" class="text-[var(--primary-blue)]">My Courses</a>
                    <a href="#" class="text-[var(--text-gray)] hover:text-[var(--main-text)]">Browse</a>
                    <a href="#" class="text-[var(--text-gray)] hover:text-[var(--main-text)]">Resources</a>
                </nav>
            </div>
            <div class="flex items-center gap-4">
                <button class="p-2 text-[var(--text-gray)] hover:bg-gray-100 rounded-full"><i data-lucide="bell" class="w-5 h-5"></i></button>
                <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-white shadow-sm overflow-hidden">
                    <img src="https://i.pravatar.cc/150?u=a042581f4e29026704d" alt="Avatar">
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-[1200px] mx-auto p-6 space-y-8">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h1 class="text-[28px] font-bold text-[var(--dark-blue)]">My Courses</h1>
                <p class="text-[var(--text-gray)] text-sm">Welcome back! You have 3 courses in progress.</p>
            </div>
            <div class="relative">
                <i data-lucide="search" class="absolute left-3 top-3 w-5 h-5 text-[var(--text-gray)]"></i>
                <input type="text" placeholder="Search your courses..." class="search-input w-full md:w-80 text-sm">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card p-5 flex items-center gap-4">
                <div class="p-3 bg-[var(--light-blue)] rounded-xl text-[var(--primary-blue)]">
                    <i data-lucide="clock" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-[12px] text-[var(--text-gray)] uppercase font-bold tracking-wider">Hours Learned</p>
                    <p class="text-xl font-bold">24.5h</p>
                </div>
            </div>
            <div class="card p-5 flex items-center gap-4 border-l-4 border-[var(--primary-blue)]">
                <div class="p-3 bg-blue-50 rounded-xl text-[var(--primary-blue)]">
                    <i data-lucide="award" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-[12px] text-[var(--text-gray)] uppercase font-bold tracking-wider">Course Progress</p>
                    <p class="text-xl font-bold">65% Overall</p>
                </div>
            </div>
            <div class="card p-5 flex items-center gap-4">
                <div class="p-3 bg-green-50 rounded-xl text-green-600">
                    <i data-lucide="check-circle" class="w-6 h-6"></i>
                </div>
                <div>
                    <p class="text-[12px] text-[var(--text-gray)] uppercase font-bold tracking-wider">Completed</p>
                    <p class="text-xl font-bold">12 Courses</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="card overflow-hidden flex flex-col">
                <div class="h-40 bg-gray-200 relative">
                    <img src="https://images.unsplash.com/photo-1558655146-d09347e92766?w=600" class="w-full h-full object-cover" alt="UI Design">
                    <div class="absolute top-3 left-3 px-2 py-1 bg-white/90 rounded text-[10px] font-bold uppercase tracking-tight text-[var(--primary-blue)]">Design</div>
                </div>
                <div class="p-5 flex-grow space-y-4">
                    <h3 class="text-lg font-bold text-[var(--dark-blue)] leading-tight">UI/UX Design Fundamentals</h3>
                    <p class="text-xs text-[var(--text-gray)]">Module 2: Visual Hierarchy • Lesson 4</p>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between text-[11px] font-bold">
                            <span>Progress</span>
                            <span class="text-[var(--primary-blue)]">65%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
                <div class="p-5 pt-0 mt-auto">
                    <button class="btn-primary w-full text-sm">Continue Learning</button>
                </div>
            </div>

            <div class="card overflow-hidden flex flex-col">
                <div class="h-40 bg-gray-200 relative">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600" class="w-full h-full object-cover" alt="Dev">
                    <div class="absolute top-3 left-3 px-2 py-1 bg-white/90 rounded text-[10px] font-bold uppercase tracking-tight text-green-600">Development</div>
                </div>
                <div class="p-5 flex-grow space-y-4">
                    <h3 class="text-lg font-bold text-[var(--dark-blue)] leading-tight">Advanced React Patterns</h3>
                    <p class="text-xs text-[var(--text-gray)]">Module 5: Custom Hooks • Lesson 2</p>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between text-[11px] font-bold">
                            <span>Progress</span>
                            <span class="text-[var(--primary-blue)]">32%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 32%"></div>
                        </div>
                    </div>
                </div>
                <div class="p-5 pt-0 mt-auto">
                    <button class="btn-primary w-full text-sm">Continue Learning</button>
                </div>
            </div>

            <div class="card overflow-hidden flex flex-col">
                <div class="h-40 bg-gray-200 relative">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600" class="w-full h-full object-cover" alt="Marketing">
                    <div class="absolute top-3 left-3 px-2 py-1 bg-white/90 rounded text-[10px] font-bold uppercase tracking-tight text-orange-500">Business</div>
                </div>
                <div class="p-5 flex-grow space-y-4">
                    <h3 class="text-lg font-bold text-[var(--dark-blue)] leading-tight">Digital Marketing Strategy</h3>
                    <p class="text-xs text-[var(--text-gray)]">Module 1: Market Analysis • Lesson 8</p>
                    
                    <div class="space-y-2">
                        <div class="flex justify-between text-[11px] font-bold">
                            <span>Progress</span>
                            <span class="text-[var(--primary-blue)]">88%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-fill" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
                <div class="p-5 pt-0 mt-auto">
                    <button class="btn-primary w-full text-sm">Continue Learning</button>
                </div>
            </div>

        </div>

        <div class="bg-[var(--light-blue)] p-6 rounded-[14px] flex flex-col md:flex-row items-center gap-6 border border-blue-100">
            <div class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center shadow-sm text-[var(--primary-blue)]">
                <i data-lucide="sparkles" class="w-8 h-8"></i>
            </div>
            <div class="text-center md:text-left">
                <h4 class="font-bold text-[var(--dark-blue)]">AI Learning Path Suggestion</h4>
                <p class="text-sm text-[var(--text-gray)]">Based on your UI/UX progress, we suggest starting the <b>"Color Theory Masterclass"</b> next.</p>
            </div>
            <button class="md:ml-auto px-6 py-2 bg-white text-[var(--primary-blue)] font-bold text-xs rounded-lg border border-[var(--border-gray)] hover:bg-gray-50 transition-colors">
                View Suggestion
            </button>
        </div>
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>