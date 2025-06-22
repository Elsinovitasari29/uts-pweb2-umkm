<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Kategoriumkm;
use Illuminate\Auth\Access\HandlesAuthorization;

class KategoriumkmPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_kategoriumkm');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Kategoriumkm $kategoriumkm): bool
    {
        return $user->can('view_kategoriumkm');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_kategoriumkm');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Kategoriumkm $kategoriumkm): bool
    {
        return $user->can('update_kategoriumkm');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Kategoriumkm $kategoriumkm): bool
    {
        return $user->can('delete_kategoriumkm');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_kategoriumkm');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Kategoriumkm $kategoriumkm): bool
    {
        return $user->can('force_delete_kategoriumkm');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_kategoriumkm');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Kategoriumkm $kategoriumkm): bool
    {
        return $user->can('restore_kategoriumkm');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_kategoriumkm');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Kategoriumkm $kategoriumkm): bool
    {
        return $user->can('replicate_kategoriumkm');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_kategoriumkm');
    }
}
