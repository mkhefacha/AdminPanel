<?php

namespace App\Http\Requests;

use App\ContactCompany;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreContactCompanyRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [

            'company_name'=> 'required|unique:contact_companies',
            'status'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'company_name.required' => "nom est obligatoire",
            'company_name.unique' => "nom c'est deja existe",

        ];
    }


}
