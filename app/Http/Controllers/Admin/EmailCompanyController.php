<?php

namespace App\Http\Controllers\Admin;

use App\ContactCompany;
use App\EmailCompany;
use App\Http\Requests\EmailRequest;
use App\Http\Requests\MasseDestroyEmailRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class EmailCompanyController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('Email_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $emailCompany = EmailCompany::all();
        return view('admin.emailCompany.index', compact('emailCompany'));
    }


    public function create(EmailCompany $emailCompany)

    {
        abort_if(Gate::denies('email_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $companies = ContactCompany::all();
        return view('admin.emailCompany.create', compact('companies', 'emailCompany'));
    }


    public function store(EmailRequest $request)

    {
        $request->persist();
        return redirect()->route('admin.email-companie.index');
    }


    public function show(EmailCompany $email_companie)
    {
        if (auth()->user()->hasRole('Superadmin') || (auth()->user()->company_id == $email_companie->company_id)) {
            abort_if(Gate::denies('email_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
            return view('admin.emailCompany.show', compact('email_companie'));
        } else {
            abort(404);
        }

    }


    public function edit(EmailCompany $email_companie)
    {
        abort_if(Gate::denies('email_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if (auth()->user()->hasRole('Superadmin') || (auth()->user()->company_id == $email_companie->company_id)) {
            $companies = ContactCompany::all();
            return view('admin.emailCompany.edit', compact('email_companie', 'companies'));
        } else
            {
            abort(404);
            }
    }


    public function update(EmailRequest $request, EmailCompany $email_companie)
    {
        $email_companie->update($request->all());
        return redirect()->route('admin.email-companie.index');
    }


    public function destroy(EmailCompany $email_companie)
    {
        abort_if(Gate::denies('email_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $email_companie->delete();
        return redirect()->route('admin.email-companie.index');
    }

    public function massDestroy(MasseDestroyEmailRequest $request)
    {
        EmailCompany::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }


}