<?php

namespace App\Policies;

use App\User;
use App\ContactContact;
use Illuminate\Auth\Access\HandlesAuthorization;

class ContactPolicy
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


    public function view(User $user, ContactContact $contactContact)
    {
        return ($user->company_id == $contactContact->company_id);
    }

    public function create(User $user)
    {
        //
    }


    public function update(User $user, ContactContact $contactContact)
    {
        return ($user->company_id == $contactContact->company_id);
    }


    public function delete(User $user, ContactContact $contactContact)
    {
        //
    }

    /**
     * Determine whether the user can restore the contact contact.
     *
     * @param  \App\User  $user
     * @param  \App\ContactContact  $contactContact
     * @return mixed
     */
    public function restore(User $user, ContactContact $contactContact)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the contact contact.
     *
     * @param  \App\User  $user
     * @param  \App\ContactContact  $contactContact
     * @return mixed
     */
    public function forceDelete(User $user, ContactContact $contactContact)
    {
        //
    }
}
