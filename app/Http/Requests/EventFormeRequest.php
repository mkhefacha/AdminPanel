<?php

namespace App\Http\Requests;

use App\Event;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;

class EventFormeRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return
            [
                'event_name' => 'required'
            ];
    }


    public function persist()
    {
        Event::create([
            'event_name' => request('event_name'),
            'date_lanch' => request('date_lanch'),
            // 'status'=>request('status'),
            'company_id' => request('company_id'),
            'event_type' => request('radiocheck'),
            //'event_type' => request('email-list'),
            'sms_id'=>request('sms-list'),
            'email_id'=> request('email-list'),
            'liste_id' => request('liste_id'),
            'user_id' => auth()->id(),
            'creer' => auth()->user()->name

        ]);
    }


}
