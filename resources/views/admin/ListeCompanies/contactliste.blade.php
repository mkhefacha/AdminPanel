@extends('layouts.admin')
@section('content')
    <div class="content">
    Liste de Contact
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ trans('cruds.contactContact.title_singular') }} {{ trans('global.list') }}
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover datatable datatable-ContactContact">
                                <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.contactContact.fields.id') }}
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
                                @foreach($contactContacts as $contactContact)
                                    @if($companie_liste->id==$contactContact->liste_id)
                                        <tr data-entry-id="{{ $contactContact->id }}">
                                            <td>

                                            </td>
                                            <td>
                                                {{ $contactContact->id ?? '' }}
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

                                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.contact-contacts.show', $contactContact->id) }}">
                                                        {{ trans('global.view') }}
                                                    </a>


                                                    <a class="btn btn-xs btn-info" href="#">
                                                        Envoyer SMS
                                                    </a>



                                                        <a class="btn btn-xs btn-danger" href="#">
                                                            Envoyer Email
                                                        </a>


                                            </td>

                                        </tr>
                                    @endif
                                @endforeach
                            </table>
                            <a style="margin-top:20px;" class="btn btn-default" href="{{ route('admin.companie-liste.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
                    @can('contact_contact_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.contact-contacts.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                            .done(function () { location.reload() })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            $('.datatable-ContactContact:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection