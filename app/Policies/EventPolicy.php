<?php

namespace App\Policies;

use App\User;
use App\Event;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
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


    public function view(User $user, Event $event)
    {
        return ($user->company_id ==  $event->company_id);
    }


    public function create(User $user)
    {
        //
    }

    public function update(User $user, Event $event)
    {
        return ($user->company_id ==  $event->company_id);
    }


    public function delete(User $user, Event $event)
    {
        //
    }


    public function restore(User $user, Event $event)
    {
        //
    }


    public function forceDelete(User $user, Event $event)
    {
        //
    }
}
