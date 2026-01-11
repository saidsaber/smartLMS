<div>
    <div class="bg-white p-5 rounded-[14px] shadow mb-6">
        <form wire:submit="Filter">
            <div class="grid grid-cols-4 gap-4">

                <input type="text" placeholder="Search by name or email" wire:model="nameOrEmail"
                    class="h-11 px-4 border border-borderGray rounded-lg focus:ring-2 focus:ring-primary outline-none">

                <select class="h-11 px-4 border border-borderGray rounded-lg" wire:model="role">
                    <option value="">All Roles</option>
                    <option value="web">Student</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                </select>

                <select class="h-11 px-4 border border-borderGray rounded-lg" wire:model="status">
                    <option value="">All Status</option>
                    <option value="active">Active</option>
                    <option value="blocked">Blocked</option>
                </select>

                <button type="submit" class="h-11 bg-primary text-white rounded-lg">
                    Filter
                </button>

            </div>
        </form>
    </div>

    <!-- Users Table -->
    <div class="bg-white rounded-[14px] shadow overflow-hidden">

        <table class="w-full text-sm">
            <thead class="bg-lightBg text-left">
                <tr>
                    <th class="p-4">User</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Role</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>

            <tbody>

                @if ($users->isNotEmpty())
                    @foreach ($users as $user)
                        <tr class="border-t">
                            <td class="p-4 flex items-center gap-3">
                                <div class="w-8 h-8 bg-primary rounded-full"></div>
                                {{ $user->name }}
                            </td>
                            <td class="p-4">{{ $user->email }}</td>
                            <td class="p-4">{{ $user->role }}</td>
                            <td class="p-4">
                                <span
                                    class="px-3 py-1 rounded-full text-xs {{ $user->status == 'active' ? 'bg-green-100 text-success' : 'bg-red-100 text-danger' }}">
                                    {{ $user->status }}
                                </span>
                            </td>
                            <td class="p-4 text-right space-x-2">
                                <button class="text-primary">Edit</button>
                                @if ($user->status == 'active')
                                    <button class="text-danger" wire:click="blockedUser({{ $user->id }})">Block</button>
                                @else
                                    <button class="text-success" wire:click="activateUser({{ $user->id }})">Active</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>

    </div>
</div>
