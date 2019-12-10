<?php

namespace App\Http\Requests;

use App\EmailCompany;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;
class EmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(Gate::denies('email_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_email'=>'required',
            'message_email'=>'required'
        ];
    }


    public function  persist()

    {
        EmailCompany::create([
            'name_email'=>request('name_email'),
            'object'=>request('object'),
            'message_email'=>request('message_email'),
            'company_id' => request('company_id'),
            'user_id' =>auth()->id(),
            'creer_email'=>auth()->user()->name

        ]);
    }


}
