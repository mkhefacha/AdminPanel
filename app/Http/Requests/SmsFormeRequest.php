<?php

namespace App\Http\Requests;

use App\SmsCompany;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;
class SmsFormeRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('sms_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;

    }


    public function rules()
    {
        return [
            'name_sms'=>'required',
            'message_sms'=>'required|string|max:100'
        ];
    }
                public function  persist()

                {
                    SmsCompany::create([
                        'name_sms'=>request('name_sms'),
                        'message_sms'=>request('message_sms'),
                        'company_id' => request('company_id'),
                        'user_id' =>auth()->id(),
                        'creer_sms'=>auth()->user()->name

                    ]);
                }

}
