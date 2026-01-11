<div>
    <aside class="w-64 bg-white min-h-screen border-r border-borderGray p-4"
        style="
    display: grid;
    align-content: space-between;
">
        <nav class="space-y-2 text-sm">
            <div onclick="window.location.href = '{{ route('admin.dashboard') }}'"
                class="{{ request()->is('admin') ? $style[0] : $style[1] }}">Dashboard</div>
            <div onclick="window.location.href = '{{ route('admin.users') }}'"
                class="{{ request()->is('admin/users*') ? $style[0] : $style[1] }}">Users</div>
            <div onclick="window.location.href = '{{ route('admin.login') }}'"
                class="{{ request()->is('courses') ? $style[0] : $style[1] }}">Courses</div>
            <div onclick="window.location.href = '{{ route('admin.login') }}'"
                class="{{ request()->is('exams') ? $style[0] : $style[1] }}">Exams</div>
            <div onclick="window.location.href = '{{ route('admin.login') }}'"
                class="{{ request()->is('payments') ? $style[0] : $style[1] }}">Payments</div>
            <div onclick="window.location.href = '{{ route('admin.login') }}'"
                class="{{ request()->is('ai') ? $style[0] : $style[1] }}">AI Monitoring</div>
            <div onclick="window.location.href = '{{ route('admin.login') }}'"
                class="{{ request()->is('setting') ? $style[0] : $style[1] }}">Settings</div>
        </nav>
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button type="submit"
                class="rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white
               transition hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                Logout
            </button>
        </form>
    </aside>
</div>
