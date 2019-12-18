<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MasseDesstroySmsRequest;
use App\Http\Requests\SmsFormeRequest;
use App\SmsCompany;
use App\ListeCompany;
use App\ContactCompany;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SmsCompanyController extends Controller
{

    public function index()
    {

        abort_if(Gate::denies('Sms_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $smsCompany = SmsCompany::all();
        return view('admin.smsCompany.index', compact('smsCompany'));
    }


    public function create(SmsCompany $smsCompany)
    {
        abort_if(Gate::denies('sms_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        $companies = ContactCompany::all();
        return view('admin.SmsCompany.create', compact('companies', 'smsCompany'));
    }


    public function store(SmsFormeRequest $request)

    {
        $request->persist();
        return redirect()->route('admin.sms-company.index');

    }


    public function show(SmsCompany $smsCompany)
    {

        abort_if(Gate::denies('sms_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->authorize('view', $smsCompany);

        return view('admin.smsCompany.show', compact('smsCompany'));


    }


    public function edit(SmsCompany $smsCompany)
    {
        abort_if(Gate::denies('sms_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $this->authorize('update', $smsCompany);
        $companies = ContactCompany::all();
        return view('admin.smsCompany.edit', compact('smsCompany', 'companies'));


    }


    public function update(SmsFormeRequest $request, SmsCompany $smsCompany)
    {
        $smsCompany->update($request->all());

        return redirect()->route('admin.sms-company.index');
    }


    public function destroy(SmsCompany $smsCompany)
    {
        abort_if(Gate::denies('sms_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $smsCompany->delete();
        return redirect()->route('admin.sms-company.index');

    }


    public function massDestroy(MasseDesstroySmsRequest $request)
    {
        SmsCompany::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }



}
