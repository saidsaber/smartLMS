<?php

namespace App\Reposatory\UserReposatory;

use App\Models\User;
use Illuminate\Support\Collection;
use PhpParser\Node\Expr\BinaryOp\BooleanAnd;

interface UserReposatoryInterface{
    public function createUser(array $data);
    public function getAllUser(): ?Collection;
    public function getFilterUser($role , $status , $nameOrEmail = null): ?Collection;
    public function updateUser(array $data ,$userId): bool;
}