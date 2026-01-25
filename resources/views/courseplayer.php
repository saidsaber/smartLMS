<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Player | Smart LMS</title>
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

        body { font-family: 'Inter', sans-serif; background-color: var(--page-bg); color: var(--main-text); }

        /* Fullscreen Wrapper Logic */
        #video-wrapper:fullscreen {
            width: 100vw; height: 100vh;
            background: #000; border-radius: 0;
            display: flex; align-items: center; justify-content: center;
        }

        .video-container {
            aspect-ratio: 16 / 9;
            background: #000;
            border-radius: 14px;
            overflow: hidden;
            position: relative;
        }

        #main-video { width: 100%; height: 100%; object-fit: contain; cursor: pointer; }

        .card { background: #FFFFFF; border-radius: 14px; box-shadow: 0 10px 25px rgba(0,0,0,0.05); }

        /* Hide default browser UI */
        video::-webkit-media-controls { display: none !important; }

        /* Sidebar lesson hover/active states */
        .lesson-item { transition: all 0.2s; border-left: 3px solid transparent; }
        .lesson-item.active { background-color: var(--light-blue); border-left-color: var(--primary-blue); }
        .lesson-item:hover:not(.active) { background-color: #F9FAFB; }

        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: var(--border-gray); border-radius: 10px; }

        /* Status Overlay (Feedback for keys) */
        #status-overlay {
            pointer-events: none; opacity: 0; transform: scale(0.8); transition: all 0.2s ease;
        }
        #status-overlay.active { opacity: 1; transform: scale(1); }
    </style>
</head>
<body class="min-h-screen">

    <header class="sticky top-0 z-50 w-full px-6 py-4 bg-white border-b border-[var(--border-gray)]">
        <div class="max-w-[1400px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <button class="p-2 hover:bg-[var(--page-bg)] rounded-lg transition-colors">
                    <i data-lucide="arrow-left" class="w-5 h-5 text-[var(--text-gray)]"></i>
                </button>
                <div>
                    <h1 class="text-sm font-bold text-[var(--main-text)] leading-tight">UI/UX Design Fundamentals</h1>
                    <p class="text-[11px] text-[var(--text-gray)]">Module 2: Visual Hierarchy • Lesson 4</p>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <div class="hidden md:flex items-center gap-2 mr-4">
                    <span class="text-xs font-medium text-[var(--text-gray)]">Your Progress: 65%</span>
                    <div class="w-32 bg-gray-200 h-1.5 rounded-full overflow-hidden">
                        <div class="bg-[var(--primary-blue)] h-full" style="width: 65%"></div>
                    </div>
                </div>
                <button class="bg-[var(--primary-blue)] text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-all shadow-md">
                    Next Lesson
                </button>
            </div>
        </div>
    </header>

    <main class="max-w-[1400px] mx-auto p-4 md:p-6">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            
            <div class="lg:col-span-3 space-y-6">
                <div id="video-wrapper" class="video-container shadow-2xl group">
                    <video id="main-video" poster="https://images.unsplash.com/photo-1558655146-d09347e92766?w=1200">
                        <source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/BigBuckBunny.mp4" type="video/mp4">
                    </video>

                    <div id="status-overlay" class="absolute inset-0 flex items-center justify-center z-20">
                        <div class="bg-black/50 text-white p-6 rounded-full">
                            <i id="status-icon" data-lucide="play" class="w-10 h-10"></i>
                        </div>
                    </div>

                    <div id="center-play" class="absolute inset-0 flex items-center justify-center z-10 transition-opacity">
                        <button class="w-20 h-20 bg-[var(--primary-blue)] rounded-full flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-transform">
                            <i data-lucide="play" id="center-play-icon" class="text-white fill-current w-8 h-8"></i>
                        </button>
                    </div>

                    <div class="absolute bottom-0 w-full p-6 bg-gradient-to-t from-black/90 to-transparent flex flex-col gap-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-30">
                        <div id="progress-container" class="w-full h-1 bg-white/30 rounded-full cursor-pointer overflow-hidden">
                            <div id="progress-fill" class="bg-[var(--primary-blue)] h-full w-0"></div>
                        </div>

                        <div class="flex items-center justify-between text-white">
                            <div class="flex items-center gap-6">
                                <button id="play-pause-btn"><i data-lucide="play" id="play-icon" class="w-5 h-5 fill-current"></i></button>
                                <button id="mute-btn"><i data-lucide="volume-2" id="volume-icon" class="w-5 h-5"></i></button>
                                <span class="text-[10px] font-mono"><span id="curr-time">0:00</span> / <span id="dur-time">0:00</span></span>
                            </div>
                            <div class="flex items-center gap-5">
                                <select id="speed-selector" class="bg-transparent text-[10px] font-bold border border-white/20 rounded px-1 outline-none">
                                    <option value="1" class="text-black">1x</option>
                                    <option value="1.5" class="text-black">1.5x</option>
                                    <option value="2" class="text-black">2x</option>
                                </select>
                                <button id="fullscreen-btn"><i data-lucide="maximize" class="w-4 h-4"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-6">
                    <div class="flex gap-8 border-b border-[var(--border-gray)] mb-6">
                        <button class="pb-4 text-sm font-bold border-b-2 border-[var(--primary-blue)] text-[var(--primary-blue)]">Overview</button>
                        <button class="pb-4 text-sm font-medium text-[var(--text-gray)] hover:text-[var(--main-text)]">Resources</button>
                        <button class="pb-4 text-sm font-medium text-[var(--text-gray)] hover:text-[var(--main-text)]">Q&A</button>
                        <button class="pb-4 text-sm font-medium text-[var(--text-gray)] hover:text-[var(--main-text)]">AI Summary</button>
                    </div>
                    <div class="space-y-4">
                        <h2 class="text-xl font-bold text-[var(--dark-blue)]">About this lesson</h2>
                        <p class="text-sm text-[var(--text-gray)] leading-relaxed">
                            In this lesson, we dive deep into the principles of Visual Hierarchy. You'll learn how to guide the user's eye through a composition using size, color, contrast, and typography.
                        </p>
                        <div class="flex gap-2 pt-2">
                            <span class="px-3 py-1 bg-[var(--page-bg)] border border-[var(--border-gray)] rounded-full text-[11px] font-semibold text-[var(--text-gray)]">#UI</span>
                            <span class="px-3 py-1 bg-[var(--page-bg)] border border-[var(--border-gray)] rounded-full text-[11px] font-semibold text-[var(--text-gray)]">#DesignPrinciples</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="card h-[calc(100vh-140px)] sticky top-24 flex flex-col overflow-hidden">
                    <div class="p-5 border-b border-[var(--border-gray)]">
                        <h3 class="font-bold text-sm">Course Content</h3>
                        <p class="text-[11px] text-[var(--text-gray)]">12 Modules • 48 Lessons</p>
                    </div>
                    <div class="flex-grow overflow-y-auto custom-scrollbar">
                        <div class="p-4 bg-gray-50 text-[11px] font-bold text-[var(--text-gray)] uppercase">Module 2: Visual Hierarchy</div>
                        <div class="lesson-item p-4 flex items-center gap-3 cursor-pointer">
                            <i data-lucide="check-circle" class="w-4 h-4 text-green-500"></i>
                            <span class="text-xs font-medium">3. Color Contrast</span>
                        </div>
                        <div class="lesson-item active p-4 flex items-center gap-3 cursor-pointer">
                            <i data-lucide="play-circle" class="w-4 h-4 text-[var(--primary-blue)]"></i>
                            <span class="text-xs font-bold text-[var(--primary-blue)]">4. Scale & Proportion</span>
                            <span class="ml-auto text-[10px] text-[var(--primary-blue)]">08:10</span>
                        </div>
                        <div class="lesson-item p-4 flex items-center gap-3 cursor-pointer">
                            <i data-lucide="circle" class="w-4 h-4 text-[var(--border-gray)]"></i>
                            <span class="text-xs font-medium">5. Gestalt Principles</span>
                        </div>
                    </div>
                    <div class="p-4 bg-[var(--light-blue)] border-t border-[var(--primary-blue)]/10">
                        <button class="w-full py-2 bg-white text-[var(--primary-blue)] rounded-lg text-xs font-bold shadow-sm flex items-center justify-center gap-2">
                            <span>✨</span> Explain this lesson
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script>
        const video = document.getElementById('main-video');
        const wrapper = document.getElementById('video-wrapper');
        const playBtn = document.getElementById('play-pause-btn');
        const centerPlay = document.getElementById('center-play');
        const muteBtn = document.getElementById('mute-btn');
        const progressFill = document.getElementById('progress-fill');
        const progressContainer = document.getElementById('progress-container');
        const statusOverlay = document.getElementById('status-overlay');

        // Toggle Play
        function togglePlay() {
            if (video.paused) {
                video.play();
                updateIcons('pause');
                centerPlay.style.opacity = "0";
                flashIcon('pause');
            } else {
                video.pause();
                updateIcons('play');
                centerPlay.style.opacity = "1";
                flashIcon('play');
            }
        }

        function updateIcons(state) {
            document.getElementById('play-icon').setAttribute('data-lucide', state);
            document.getElementById('center-play-icon').setAttribute('data-lucide', state);
            lucide.createIcons();
        }

        function toggleMute() {
            video.muted = !video.muted;
            const icon = video.muted ? 'volume-x' : 'volume-2';
            document.getElementById('volume-icon').setAttribute('data-lucide', icon);
            flashIcon(icon);
            lucide.createIcons();
        }

        function flashIcon(name) {
            document.getElementById('status-icon').setAttribute('data-lucide', name);
            lucide.createIcons();
            statusOverlay.classList.add('active');
            setTimeout(() => statusOverlay.classList.remove('active'), 400);
        }

        function toggleFullscreen() {
            if (!document.fullscreenElement) { wrapper.requestFullscreen(); } 
            else { document.exitFullscreen(); }
        }

        // Logic Listeners
        playBtn.addEventListener('click', togglePlay);
        centerPlay.addEventListener('click', togglePlay);
        video.addEventListener('click', togglePlay);
        muteBtn.addEventListener('click', toggleMute);
        document.getElementById('fullscreen-btn').addEventListener('click', toggleFullscreen);

        video.addEventListener('timeupdate', () => {
            const perc = (video.currentTime / video.duration) * 100;
            progressFill.style.width = perc + "%";
            document.getElementById('curr-time').innerText = formatTime(video.currentTime);
        });

        video.addEventListener('loadedmetadata', () => {
            document.getElementById('dur-time').innerText = formatTime(video.duration);
        });

        progressContainer.addEventListener('click', (e) => {
            video.currentTime = (e.offsetX / progressContainer.offsetWidth) * video.duration;
        });

        function formatTime(t) {
            const m = Math.floor(t / 60);
            const s = Math.floor(t % 60);
            return `${m}:${s < 10 ? '0' : ''}${s}`;
        }

        // Keyboard Shortcut Mapping
        document.addEventListener('keydown', (e) => {
            if (document.activeElement.tagName === 'INPUT') return;
            const key = e.key.toLowerCase();
            if (key === ' ' || key === 'k') { e.preventDefault(); togglePlay(); }
            else if (key === 'm') toggleMute();
            else if (key === 'f') toggleFullscreen();
            else if (key === 'arrowright') { video.currentTime += 5; flashIcon('fast-forward'); }
            else if (key === 'l') { video.currentTime += 10; flashIcon('fast-forward'); }
            else if (key === 'arrowleft') { video.currentTime -= 5; flashIcon('rewind'); }
            else if (key === 'j') { video.currentTime -= 10; flashIcon('rewind'); }
            else if (key >= '0' && key <= '9') { video.currentTime = (video.duration / 10) * parseInt(key); flashIcon('hash'); }
        });

        lucide.createIcons();
    </script>
</body>
</html>