<?php

namespace App\Reposatory\UserReposatory;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class UserReposatory implements UserReposatoryInterface
{

    public function createUser(array $data){
        if(!isset($data['status'])){
            $data['status'] = 'blocked';
        }
        $data['password'] = Hash::make($data['password']);
        User::create($data);
    }
    public function getAllUser(): ?Collection
    {
        return User::all();
    }

    public function getFilterUser($role, $status, $nameOrEmail = null): ?Collection
    {
        $users = User::query();
        $roles = ['web', 'teacher', 'admin'];
        $statuses = ['active', 'blocked'];

        if (in_array($role, $roles)) {
            $users->where('role', $role);
        }

        if (in_array($status, $statuses)) {
            $users->where('status', $status);
        }

        if (!empty($nameOrEmail)) {
            $users->where(function ($q) use ($nameOrEmail) {
                $q->where('name', 'like', '%' . $nameOrEmail . '%')
                    ->orWhere('email', 'like', '%' . $nameOrEmail . '%');
            });
        }

        return $users->get();
    }

    public function updateUser(array $data , $userId): bool
    {
        $user = User::find($userId);
        if($user->update($data)){
            return true;
        }
        return false;
    }
}
