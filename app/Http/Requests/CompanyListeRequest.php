<?php

namespace App\Http\Requests;

use App\ListeCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
class CompanyListeRequest extends FormRequest
{


    public function authorize()
    {
        abort_if(Gate::denies('liste_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
            'liste_name' => 'required',
            'company_id' => 'required',
        ];
    }

    public function messages()
    {
        return [

            'liste_name.required' => "le nom de la liste doit etre  obligatoire",
            'company_id' => "le company doit etre obligatoire"
        ];
    }


    public function persist()
    {

        ListeCompany::create([
            'liste_name' => request('liste_name'),
            'company_id' => request('company_id'),
            'user_id' =>auth()->id(),
             'creer'=>auth()->user()->name
        ]);
    }







}
