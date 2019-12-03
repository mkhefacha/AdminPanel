@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contactContact.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.company') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->company->company_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                     contact_name
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Liste_name
                                    </th>
                                    <td>
                                        {{ $contactContact->ListeCompany->liste_name ?? ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_phone_1') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_phone_1 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_phone_2') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_phone_2 }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.contact_email') }}
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Réaliser Par
                                    </th>
                                    <td>
                                        {{ $contactContact->contact_creer ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                       Created_at
                                    </th>
                                    <td>
                                        {{ucwords($contactContact->created_at->formatlocalized('%d %b %G'))}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection