<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImportRequest;
use App\Imports\ContactImport;
use Auth;
use App\ContactCompany;
use App\ContactContact;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyContactContactRequest;
use App\Http\Requests\StoreContactContactRequest;
use App\Http\Requests\UpdateContactContactRequest;
use App\ListeCompany;
use Gate;
use Illuminate\Http\Request;
use Excel;
use Symfony\Component\HttpFoundation\Response;

class ContactContactsController extends Controller
{


    public function index()
    {
        abort_if(Gate::denies('contact_contact_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactContacts = ContactContact::with('company')->get();

        return view('admin.contactContacts.index', compact('contactContacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('contact_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $companies = ContactCompany::all();
        $listes = ListeCompany::all();

        return view('admin.contactContacts.create', compact('companies', 'listes'));
    }

    public function store(StoreContactContactRequest $request)
    {
        if (request()->hasFile('file'))
        {
            Excel::import(new ContactImport(), Request()->file('file'));
        }
      else
          {
          $request->persist();
         }

        return redirect()->route('admin.contact-contacts.index');
    }


    public function edit(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

      $this->authorize('update', $contactContact);

        if((auth()->user()->hasRole('Superadmin'))||(auth()->id()==$contactContact->user_id)||(auth()->user()->hasRole('Admin')))
        {
            $companies = ContactCompany::all();
            $listes = ListeCompany::all();
            $contactContact->load('company');
            return view('admin.contactContacts.edit', compact('companies', 'contactContact', 'listes'));
        }
        else
        {
            abort(403);
        }



    }

    public function update(UpdateContactContactRequest $request, ContactContact $contactContact)
    {
        $contactContact->update($request->all());

        return redirect()->route('admin.contact-contacts.index');
    }

    public function show(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       $this->authorize('view', $contactContact);

        $contactContact->load('company');
        return view('admin.contactContacts.show', compact('contactContact'));

    }

    public function destroy(ContactContact $contactContact)
    {
        abort_if(Gate::denies('contact_contact_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactContact->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactContactRequest $request)
    {
        ContactContact::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }


}
