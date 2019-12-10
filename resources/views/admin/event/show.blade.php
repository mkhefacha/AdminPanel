@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('global.show') }} {{ trans('cruds.user.title') }}
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th>
                                      ID
                                    </th>
                                    <td>
                                        {{ $event->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                      event_name
                                    </th>
                                    <td>
                                        {{ $event->event_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Companies
                                    </th>
                                    <td>
                                        {{ $event->company->company_name ?? ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Liste_name
                                    </th>
                                    <td>
                                        {{ $event->ListeCompanie->liste_name ?? ''}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                       date_lancement
                                    </th>
                                    <td>
                                        {{ $event->date_lanch ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Réaliser Par
                                    </th>
                                    <td>
                                        {{ $event->creer ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Created_at
                                    </th>
                                    <td>
                                        {{ucwords($event->created_at->formatlocalized('%d %b %G'))}}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Status
                                    </th>
                                    <td>
                                        @if($event->status=='deja lancé')<span class="label label-success">deja lancé</span>
                                        @else
                                            <span class="label label-danger">en attente</span>
                                        @endif
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