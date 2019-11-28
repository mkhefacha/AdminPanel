<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\ContactCompany;
use Auth;
class TestController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

  public function hasRole()
  {

  }
    public function index()
    {

        // (auth()->user()->roles()->get());
        //$roles =auth()->user()->roles()->get();

        return view('test');



        //  return $contactCompany->users()->get();

        //return view('test', compact('contactCompany'));
       // $companies = ContactCompany::whereId($contactCompany->id)->get();
        //return $contactCompany->id;
    //  return $companies;

    }
}

