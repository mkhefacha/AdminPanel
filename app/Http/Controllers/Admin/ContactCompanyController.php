<?php

namespace App\Http\Controllers\Admin;

use App\ContactCompany;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\ScopeUser;
use App\Http\Requests\MassDestroyContactCompanyRequest;
use App\Http\Requests\StoreContactCompanyRequest;
use App\Http\Requests\UpdateContactCompanyRequest;
use Gate;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactCompanyController extends Controller
{
    use ScopeUser;

    public function index()
    {
        abort_if(Gate::denies('contact_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactCompanies = ContactCompany::all();


        return view('admin.contactCompanies.index', compact('contactCompanies'));
    }

    public function create()
    {
        abort_if(Gate::denies('contact_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactCompanies.create');
    }

    public function store(StoreContactCompanyRequest $request)
    {
        ContactCompany::create($request->all());

        return redirect()->route('admin.contact-companies.index');
    }

    public function edit(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactCompanies.edit', compact('contactCompany'));
    }

    public function update(UpdateContactCompanyRequest $request, ContactCompany $contactCompany)
    {

        if ($contactCompany->status == "Inactive")
        {
            User::ActiveUser($contactCompany->id)->update(['active' => 1]);
            $contactCompany->update($request->except('token'));
        } else
            {
            User::ActiveUser($contactCompany->id)->update(['active' => 0]);
            $contactCompany->update($request->except('token'));
            }

        return redirect()->route('admin.contact-companies.index');
    }


    public function show(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactCompanies.show', compact('contactCompany'));
    }

    public function destroy(ContactCompany $contactCompany)
    {
        abort_if(Gate::denies('contact_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactCompany->users()->delete();
        $contactCompany->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactCompanyRequest $request)
    {
        ContactCompany::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function history()

    {
    abort_if(Gate::denies('contact_company_history'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $contactCompanies = ContactCompany::onlyTrashed()->get();

        return view('admin.contactCompanies.history', compact('contactCompanies'));

    }

    public function forcedestroy($id)
    {
        $contactCompanies = ContactCompany::withTrashed()->whereId($id)->first();

        $contactCompanies->forceDelete();
        return back();
    }


    public function restore($id)
    {
        $contactCompanies = ContactCompany::withTrashed()->whereId($id)->first();
        User::withTrashed()->ActiveUser($id)->restore();
        $contactCompanies->restore();

        return redirect()->route('admin.contact-companies.index');

    }


}
