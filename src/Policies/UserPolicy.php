<?php

namespace Sorethea\FilakubeAdmin\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return $user->can("users.viewAny");
    }

    public function view(User $user, User $model): bool
    {
        return $user->can("users.view");
    }

    public function create(User $user): bool
    {
        return $user->can("users.create");
    }

    public function update(User $user, User $model): bool
    {
        return $user->can("users.update");
    }

    public function delete(User $user, User $model): bool
    {
        return $user->can("users.delete");
    }

    public function restore(User $user, User $model): bool
    {
        return $user->can("users.restore");
    }

    public function forceDelete(User $user, User $model): bool
    {
        return $user->can("users.forceDelete");
    }
}
