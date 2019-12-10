@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Email
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th>
                                        Email Id
                                    </th>
                                    <td>
                                        {{$email_companie->id}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Emai Name
                                    </th>
                                    <td>
                                        {{$email_companie->name_email}}
                                    </td>
                                </tr>


                                <tr>
                                    <th>
                                        Object
                                    </th>
                                    <td>
                                        {{$email_companie->object}}
                                    </td>
                                </tr>


                                <tr>
                                    <th>
                                        Message
                                    </th>
                                    <td>
                                        {{$email_companie->message_email}}
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Companies
                                    </th>
                                    <td>
                                        {{$email_companie->company->company_name ?? ''}}
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        creer par:
                                    </th>
                                    <td>
                                        {{$email_companie->creer_email}}
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