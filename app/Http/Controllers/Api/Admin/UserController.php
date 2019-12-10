<?php

namespace App\Http\Controllers\Api\Admin;

use App\ContactCompany;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;
class UserController extends Controller
{

    public function index()
    {

      return  UserCollection::collection(User::all());

    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show(User $user)
    {
        return new UserResource($user);
    }


    public function edit(User $user)
    {

    }


    public function update(Request $request, User $user)
    {

    }

    public function destroy(User $user)
    {
        //
    }
}
