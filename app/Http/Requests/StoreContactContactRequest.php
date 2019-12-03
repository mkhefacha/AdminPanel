<?php

namespace App\Http\Requests;

use App\ContactContact;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreContactContactRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('contact_contact_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
          //  'contact_email'=>'unique:ContactContact',
            //'contact_phone_1'=>'unique:ContactContact',
           // 'contact_phone_2'=>'required',
        ];
    }

    public function persist()
    {

        ContactContact::create([
            'contact_name' => request('contact_name'),
            'company_id' => request('company_id'),
            'contact_phone_1'=>request('contact_phone_1'),
            'contact_phone_2'=>request('contact_phone_2'),
            'contact_email'=>request('contact_email'),
            'liste_id'=>request('liste_id'),
            'user_id' =>auth()->id(),
            'contact_creer'=>auth()->user()->name,
        ]);
    }

}
