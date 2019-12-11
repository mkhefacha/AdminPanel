<?php

namespace App\Policies;

use App\User;
use App\EmailCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmailPolicy
{
    public function before(User $user)
    {
        if ($user->name == "Superadmin")
        {
            return true;
        }
    }
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the email company.
     *
     * @param  \App\User  $user
     * @param  \App\EmailCompany  $emailCompany
     * @return mixed
     */
    public function view(User $user, EmailCompany $emailCompany)
    {
        return ($user->company_id == $emailCompany->company_id);
    }

    /**
     * Determine whether the user can create email companies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the email company.
     *
     * @param  \App\User  $user
     * @param  \App\EmailCompany  $emailCompany
     * @return mixed
     */
    public function update(User $user, EmailCompany $emailCompany)
    {
        return ($user->company_id == $emailCompany->company_id);
    }

    /**
     * Determine whether the user can delete the email company.
     *
     * @param  \App\User  $user
     * @param  \App\EmailCompany  $emailCompany
     * @return mixed
     */
    public function delete(User $user, EmailCompany $emailCompany)
    {
        //
    }

    /**
     * Determine whether the user can restore the email company.
     *
     * @param  \App\User  $user
     * @param  \App\EmailCompany  $emailCompany
     * @return mixed
     */
    public function restore(User $user, EmailCompany $emailCompany)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the email company.
     *
     * @param  \App\User  $user
     * @param  \App\EmailCompany  $emailCompany
     * @return mixed
     */
    public function forceDelete(User $user, EmailCompany $emailCompany)
    {
        //
    }
}
