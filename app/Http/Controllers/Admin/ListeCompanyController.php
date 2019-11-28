<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ListeCompany;
use Gate;
use Symfony\Component\HttpFoundation\Response;
class ListeCompanyController extends Controller
{

    public function index()
    {
       abort_if(Gate::denies('liste_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
       return view('admin.listeCompanies.index');
    }


    public function create()
    {
        abort_if(Gate::denies('liste_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    }


    public function store(Request $request)
    {

    }


    public function show(ListeCompany $listeCompany)
    {
        abort_if(Gate::denies('liste_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    }


    public function edit(ListeCompany $listeCompany)
    {
        abort_if(Gate::denies('liste_company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    }


    public function update(Request $request, ListeCompany $listeCompany)
    {
        //
    }


    public function destroy(ListeCompany $listeCompany)
    {
        abort_if(Gate::denies('liste_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }
}
