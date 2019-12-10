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


    public function autorize(ListeCompany $companie_liste)
    {
        if((auth()->user()->hasRole('Superadmin')) || (auth()->user()->company_id==$companie_liste->company_id) )
        {
            return true;
        }
        else
        {
            abort(404);

        }

    }


}
