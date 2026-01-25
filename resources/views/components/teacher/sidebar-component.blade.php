    <aside class="w-64 bg-white border-r border-[#E5E7EB]">

        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b border-[#E5E7EB]">
            <h2 class="text-lg font-bold text-[#2F6FED]">Smart LMS</h2>
        </div>

        <!-- Menu -->
        <nav class="p-4 space-y-2 text-sm">

            <!-- Dashboard (Active) -->
            <a href="{{ route('teacher.dashboard') }}"
                class="{{ request()->is('teacher/dashboard*') ? $style[0] : $style[1] }}">
                <span>📊</span>
                Dashboard
            </a>

            <!-- My Courses -->
            <a href="{{ route('teacher.mycourses') }}"
                class="{{ request()->is('teacher/courses*') ? $style[0] : $style[1] }}">

                <span>📚</span>
                Course Management
            </a>

            <!-- Students -->
            <a href="students.html"
                class="flex items-center gap-3 px-4 py-3 rounded-[10px]
                text-[#6B7280] hover:bg-[#F5F7FB]">
                <span>👨‍🎓</span>
                Content Management
            </a>

            <!-- Earnings -->
            <a href="earnings.html"
                class="flex items-center gap-3 px-4 py-3 rounded-[10px]
                text-[#6B7280] hover:bg-[#F5F7FB]">
                <span>💰</span>
                Exam Management
            </a>

            <a href="earnings.html"
                class="flex items-center gap-3 px-4 py-3 rounded-[10px]
                text-[#6B7280] hover:bg-[#F5F7FB]">
                <span>💰</span>
                Student Monitoring
            </a>

            <a href="earnings.html"
                class="flex items-center gap-3 px-4 py-3 rounded-[10px]
                text-[#6B7280] hover:bg-[#F5F7FB]">
                <span>💰</span>
                Profile
            </a>

        </nav>
    </aside>
