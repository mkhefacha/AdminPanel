<?php

namespace App\Policies;

use App\User;
use App\ContactCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
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
     * Determine whether the user can view the contact company.
     *
     * @param  \App\User  $user
     * @param  \App\ContactCompany  $contactCompany
     * @return mixed
     */
    public function view(User $user, ContactCompany $contactCompany)
    {
        return ($user->company_id == $contactCompany->id);
    }

    /**
     * Determine whether the user can create contact companies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the contact company.
     *
     * @param  \App\User  $user
     * @param  \App\ContactCompany  $contactCompany
     * @return mixed
     */
    public function update(User $user, ContactCompany $contactCompany)
    {
        return ($user->company_id == $contactCompany->id);
    }

    /**
     * Determine whether the user can delete the contact company.
     *
     * @param  \App\User  $user
     * @param  \App\ContactCompany  $contactCompany
     * @return mixed
     */
    public function delete(User $user, ContactCompany $contactCompany)
    {
        //
    }

    /**
     * Determine whether the user can restore the contact company.
     *
     * @param  \App\User  $user
     * @param  \App\ContactCompany  $contactCompany
     * @return mixed
     */
    public function restore(User $user, ContactCompany $contactCompany)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the contact company.
     *
     * @param  \App\User  $user
     * @param  \App\ContactCompany  $contactCompany
     * @return mixed
     */
    public function forceDelete(User $user, ContactCompany $contactCompany)
    {
        //
    }
}
