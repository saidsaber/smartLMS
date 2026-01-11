<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use App\Reposatory\UserReposatory\UserReposatoryInterface;

class AllUsersLivewire extends Component
{
    public $users;
    public $role;
    public $status;
    public $nameOrEmail;

    public function activateUser($userId , UserReposatoryInterface $userReposatory){
        $userReposatory->updateUser(['status' => 'active'],$userId);
        $this->users = $userReposatory->getAllUser();
    }

    public function blockedUser($userId , UserReposatoryInterface $userReposatory){
        $userReposatory->updateUser(['status' => 'blocked'],$userId);
        $this->users = $userReposatory->getAllUser();
    }
    public function Filter(UserReposatoryInterface $userReposatory){
        $this->users = $userReposatory->getFilterUser($this->role , $this->status , $this->nameOrEmail);
    }
    public function mount(UserReposatoryInterface $userReposatory){
        $this->users = $userReposatory->getAllUser();
    }
    public function render()
    {
        return view('livewire.admin.all-users-livewire');
    }
}
