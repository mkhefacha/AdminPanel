<?php

namespace App\Http\Controllers;

use App\Event;
use App\ListeCompany;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\ContactCompany;
use App\ContactContact;
use Auth;
use App\SmsCompany;

class TestController extends Controller
{


    public function index()


    {


   return view('test');

        // $user= User::pluck('name');
        //return $user;
        //  return Role::pluck('title', 'id');
        //  return $user->forget('marwen')->all();


        //  $q= $user->contains('name','marwen');//true or false
        // dump($q);


        /*$user->each(function ($item,$key) {
            dump($item['name']);
        });*/


        /* $q=  $user->filter(function($value, $key) {
               if ($value['id'] == 2) {
                   return true;
               }
           });

           return $q->all();*/


        //return view('test',compact('liste_Company','contactContacts'));
    }




}

