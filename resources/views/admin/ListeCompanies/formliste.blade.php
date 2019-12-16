
@foreach($listecopmpany as $companie_liste)

    <tr data-entry-id="{{$companie_liste->id}}">
        <td>

        </td>
        <td>
            {{$companie_liste->liste_name ?? ''  }}
        </td>
        <td>
            {{$companie_liste->company->company_name ?? ''}}
        </td>
        <td>
            {{$companie_liste->creer ?? ''  }}
        </td>
        <td>
            {{ucwords($companie_liste->created_at->formatlocalized('%d %b %G'))}}
        </td>

        <td>


            @can('liste_company_show')

                <button type="button" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal{{$companie_liste->id}}" >afficher</button>

                <div class="modal fade" id="exampleModal{{$companie_liste->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            @foreach( $companie_liste->contactContacts as $contactContact)

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
            @endcan




            @can('liste_company_edit')
                <a class="btn btn-xs btn-info" href="{{route('admin.companie-liste.edit', $companie_liste->id)}}">
                    {{ trans('global.edit') }}
                </a>
            @endcan

            @can('liste_company_delete')
                <form action="{{route('admin.companie-liste.destroy',$companie_liste->id)}}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                </form>
            @endcan

        </td>

    </tr>
@endforeach