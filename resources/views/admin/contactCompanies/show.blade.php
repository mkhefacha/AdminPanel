@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.contactCompany.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.company_name') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->company_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.company_address') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->company_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.company_website') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->company_website }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.company_email') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->company_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.nbr_sms') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->nbr_sms }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contactCompany.fields.nbr_email') }}
                                    </th>
                                    <td>
                                        {{ $contactCompany->nbr_email }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Status
                                    </th>
                                    <td>
                                        @if($contactCompany->status=='Active')<span class="label label-success">Active</span>
                                        @else
                                            <span class="label label-danger">Inactive</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                    <ul class="nav nav-tabs">

                    </ul>
                    <div class="tab-content">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection