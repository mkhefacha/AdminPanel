<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Gate;
class MasseDestroyEmailRequest extends FormRequest
{

    public function authorize()
    {
        abort_if(Gate::denies('email_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return true;
    }


    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:email_companies,id',
        ];
    }
}
