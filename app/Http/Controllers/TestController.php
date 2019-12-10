<?php

namespace App\Http\Controllers;
use App\ListeCompany;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\ContactCompany;
use App\ContactContact;
use Auth;
class TestController extends Controller
{



        public function index()


        {




            return auth()->id();

           //return $request;




        //return $listeCompanie ;

          //  $contactContacts=ContactContact::all();

                     // ContactContact::all();
       /*  foreach ($listeCompanie->contactContacts as $contactContacts)
         {
                      if ($listeCompanie->id == $contactContacts->liste_id)
                {
                    dump ($contactContacts->contact_name);
                }

         }*/

            //return view('test',compact('liste_Company','contactContacts'));
        }


}

