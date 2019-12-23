@foreach( $event as  $events)
    <tr data-entry-id="{{ $events->id }}">
        <td>

        </td>

        <td>
            {{ $events->event_name ?? '' }}
        </td>
        <td>
            {{ $events->company->company_name ?? ''}}
        </td>
        <td>
            <a href="#"   data-toggle="modal" data-target="#exampleModal{{$events->ListeCompanie->id}}"> {{ $events->ListeCompanie->liste_name ?? ''}} </a>
            <div class="modal fade" id="exampleModal{{$events->ListeCompanie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-lg">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">liste contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="table-responsive">
                                <table class=" table table-bordered table-striped table-hover datatable datatable-ContactContact">
                                    <thead>
                                    <tr>
                                        <th width="10">

                                        </th>

                                        <th>
                                            {{ trans('cruds.contactContact.fields.company') }}
                                        </th>
                                        <th>
                                            Liste_name
                                        </th>
                                        <th>
                                            contact_name
                                        </th>
                                        <th>
                                            {{ trans('cruds.contactContact.fields.contact_phone_1') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.contactContact.fields.contact_phone_2') }}
                                        </th>
                                        <th>
                                            {{ trans('cruds.contactContact.fields.contact_email') }}
                                        </th>
                                        <th>
                                            Réaliser Par
                                        </th>
                                        <th>
                                            date création
                                        </th>
                                        <th>
                                            &nbsp;
                                        </th>
                                    </tr>
                                    </thead>
                                    @if(auth()->user()->hasRole('Superadmin'))
                                        @foreach( $events->ListeCompanie->contactContacts as $contactContact)

                                            <tr data-entry-id="{{ $contactContact->id }}">
                                                <td>

                                                </td>
                                                <td>
                                                    {{ $contactContact->company->company_name ?? ''}}
                                                </td>
                                                <td>
                                                    {{ $contactContact->ListeCompanie->liste_name ?? ''}}
                                                </td>
                                                <td>
                                                    {{ $contactContact->contact_name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $contactContact->contact_phone_1 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $contactContact->contact_phone_2 ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $contactContact->contact_email ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $contactContact->contact_creer ?? '' }}
                                                </td>
                                                <td>
                                                    {{ucwords($contactContact->created_at->formatlocalized('%d %b %G'))}}
                                                </td>
                                                <td>
                                                    @can('envoyer_sms')
                                                        <a class="btn btn-xs btn-info" href="#">
                                                            Envoyer SMS
                                                        </a>
                                                    @endcan

                                                    @can('envoyer_email')
                                                        <a class="btn btn-xs btn-danger" href="#">
                                                            Envoyer Email
                                                        </a>
                                                    @endcan

                                                </td>

                                            </tr>

                                        @endforeach
                                    @endif
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </td>


        <td>
            {{ $events->date_lanch ?? '' }}
        </td>



        <td>
            {{ $events->creer ?? '' }}
        </td>


        <td>
            {{ $events->smscompanie->name_sms ?? $events->emailcompanie->name_email ??'' }}
        </td>


        <td>
            {{ucwords($events->created_at->formatlocalized('%d %b %G'))}}
        </td>
        <td>
            @if($events->status=='deja lancé')<span class="label label-success">deja lancé</span>
            @else
                <span class="label label-danger">en attente</span>
            @endif
        </td>

        <td>
            @can('event_show')
                <a class="btn btn-xs btn-primary" href="{{ route('admin.event.show', $events->id) }}">
                    {{ trans('global.view') }}
                </a>
            @endcan

            @can('event_edit')
                <a class="btn btn-xs btn-info" href="{{ route('admin.event.edit', $events->id) }}">
                    {{ trans('global.edit') }}
                </a>
            @endcan

            @can('event_delete')
                <form action="{{ route('admin.event.destroy', $events->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                </form>
            @endcan

        </td>

    </tr>
@endforeach