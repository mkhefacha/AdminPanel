@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                       Liste
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th>
                                      Liste Id
                                    </th>
                                    <td>
                                        {{ $companie_liste->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                       Liste Name
                                    </th>
                                    <td>
                                        {{ $companie_liste->liste_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Companies
                                    </th>
                                    <td>
                                        {{ $companie_liste->company->company_name ?? ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                       creer par:
                                    </th>
                                    <td>
                                        {{ $companie_liste->creer ?? '' }}
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                          <a style="margin-top:20px;" class="btn btn-success" href="{{route('admin.liste-contact', $companie_liste)}}">
                               afficher contact
                            </a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection