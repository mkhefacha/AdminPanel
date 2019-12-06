<?php

namespace App\Http\Controllers\Admin;
use App\ContactContact;
use App\ContactCompany;
use App\Http\Requests\CompanyListeRequest;
use App\Http\Requests\MasseDestroyListeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ListeCompany;
use Gate;
use App\User;
use Symfony\Component\HttpFoundation\Response;

class ListeCompanyController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('liste_company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $listecopmpany = ListeCompany::all();
        return view('admin.listeCompanies.index', compact('listecopmpany'));
    }


    public function create(ListeCompany $listeCompany)
    {
        abort_if(Gate::denies('liste_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companies = ContactCompany::all();

        return view('admin.listeCompanies.create', compact('companies', 'listeCompany'));

    }

    public function store(CompanyListeRequest $request)
    {
        $request->persist();

        return redirect()->route('admin.companie-liste.index');
    }

    public function show(ListeCompany $companie_liste)
    {
        abort_if(Gate::denies('liste_company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.listeCompanies.show', compact('companie_liste'));
    }


    public function edit(ListeCompany $companie_liste)
    {
        abort_if(Gate::denies('liste_company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $companies = ContactCompany::all();

        return view('admin.listeCompanies.edit', compact('companie_liste', 'companies'));

    }


    public function update(CompanyListeRequest $request, ListeCompany $companie_liste)
    {
        $companie_liste->update($request->all());

        return redirect()->route('admin.companie-liste.index');
    }


    public function destroy(ListeCompany $companie_liste)
    {
        abort_if(Gate::denies('liste_company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companie_liste->delete();
        return redirect()->route('admin.companie-liste.index');
    }


    public function massDestroy(MasseDestroyListeRequest $request)
    {
        ListeCompany::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function contactListe(ListeCompany $companie_liste)

    {
        abort_if(Gate::denies('liste_contact'), Response::HTTP_FORBIDDEN, '403 Forbidden');



               return view('admin.listeCompanies.contactliste',compact('companie_liste'));





    }





}
