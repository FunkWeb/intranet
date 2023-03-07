<?php

namespace App\Traits;

use App\Models\Auth\Role;

trait HasRoles
{

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Assign the given role to the user.
     *
     * @param  string  $role
     * @return void
     */
    public function assignRole($role)
    {
        $this->roles()->syncWithoutDetaching(
            Role::whereName($role)->firstOrFail()
        );
    }

    /**
     * Remove the given role from the user.
     *
     * @param  string  $role
     * @return void
     */
    public function removeRole($role)
    {
        $this->roles()->detach(
            Role::whereName($role)->firstOrFail()
        );
    }

    /**
     * Determine if the user has the given role.
     *
     * @param  string  $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }

}
