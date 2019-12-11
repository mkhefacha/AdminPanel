@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        SMS
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th>
                                        Sms Id
                                    </th>
                                    <td>
                                        {{$smsCompany->id}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Sms Name
                                    </th>
                                    <td>
                                        {{$smsCompany->name_sms}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Companies
                                    </th>
                                    <td>
                                        {{$smsCompany->company->company_name ?? ''}}
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Message
                                    </th>
                                    <td>
                                        {{$smsCompany->message_sms}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        creer par:
                                    </th>
                                    <td>
                                        {{$smsCompany->creer_sms}}
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