<?php

namespace App\Policies;

use App\User;
use App\ListeCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class listePolicy
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


    public function view(User $user, ListeCompany $listeCompany)
    {
        return ($user->company_id == $listeCompany->company_id);
    }

    public function create(User $user)
    {
        //
    }


    public function update(User $user, ListeCompany $listeCompany)
    {
        return ($user->company_id == $listeCompany->company_id);
    }

    public function delete(User $user, ListeCompany $listeCompany)
    {
        //
    }


    public function restore(User $user, ListeCompany $listeCompany)
    {
        //
    }


    public function forceDelete(User $user, ListeCompany $listeCompany)
    {
        //
    }
}
