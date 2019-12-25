<?php

namespace App\Http\Controllers\Admin;

use App\ContactCompany;
use App\ContactContact;
use App\Event;
use App\User;

class HomeController
{
    public function index()
    {
        $companies_count = ContactCompany::count();
        $events_count = Event::count();
        $users_count = User::wherehas('roles',function ($q){
            return $q->whereIn('title',['Admin','User']);
        })->count();

        $contacts_count = ContactContact::count();

        return view('home', compact('companies_count', 'events_count', 'users_count', 'contacts_count'));
    }
}
