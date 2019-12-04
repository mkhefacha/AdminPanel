<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\ContactCompany;
use Auth;
class TestController extends Controller
{



        public function index($id)

        {
            $user=User::find($id);


            //$company=ContactCompany::find($id);
           // foreach ($user as $users)
            //{
                 dump ($user->company->company_name ?? '');

            //};
        }


}

