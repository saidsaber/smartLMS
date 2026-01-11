<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Reposatory\UserReposatory\UserReposatoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.admin-user-form');
    }

    public function createUser(CreateUserRequest $request , UserReposatoryInterface $userReposatory){
        $userReposatory->createUser($request->validated());
        return back()->with(['success' => 'user created success']);
    }
}
