<?php

namespace App\Policies;

use App\User;
use App\SmsCompany;
use Illuminate\Auth\Access\HandlesAuthorization;

class SmsPolicy
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


    public function view(User $user, SmsCompany $smsCompany)
    {
        return ($user->company_id == $smsCompany->company_id);
    }


    public function create(User $user)
    {
        //
    }


    public function update(User $user, SmsCompany $smsCompany)
    {
        return ($user->company_id == $smsCompany->company_id);
    }


    public function delete(User $user, SmsCompany $smsCompany)
    {
        //
    }


    public function restore(User $user, SmsCompany $smsCompany)
    {
        //
    }


    public function forceDelete(User $user, SmsCompany $smsCompany)
    {
        //
    }
}
