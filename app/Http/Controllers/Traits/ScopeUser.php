<?php


namespace App\Http\Controllers\Traits;

use App\User;
use App\ContactCompany;
use  App\Role;
use Illuminate\Http\Request;

trait ScopeUser
{


    public function AllComapnies()
    {
        return ContactCompany::all()->pluck('company_name', 'id', 'status')->prepend(trans('global.pleaseSelect'), '');

    }


    public function AllRoles()
    {

        return Role::all()->pluck('title', 'id');
    }






}
