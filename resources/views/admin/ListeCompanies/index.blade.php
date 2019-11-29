@extends('layouts.admin')
@section('content')
    <div class="content">
        @can('liste_company_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route("admin.companie-liste.create") }}">
                      Ajouter Liste
                    </a>
                </div>
            </div>
        @endcan
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Ajouter Liste
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover datatable datatable-ContactContact">
                                <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                       Liste_name
                                    </th>
                                    <th>
                                        Company_name
                                    </th>
                                    <th>
                                        creér par
                                    <th>
                                        date creation
                                    </th>

                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                  @foreach($listecopmpany as $listecompanies)
                                    <tr >
                                        <td>

                                        </td>
                                        <td>
                                            {{$listecompanies->liste_name ?? ''  }}
                                        </td>
                                        <td>
                                            {{$listecompanies->company->company_name ?? ''}}
                                        </td>
                                        <td>
                                            {{$listecompanies->creer ?? ''  }}
                                        </td>
                                        <td>
                                            {{ucwords($listecompanies->created_at->formatlocalized('%d %b %G'))}}
                                        </td>

                                        <td>
                                            @can('liste_company_show')
                                                <a class="btn btn-xs btn-primary" href="{{route('admin.companie-liste.show', $listecompanies->id)}}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('liste_company_edit')
                                                <a class="btn btn-xs btn-info" href="{{route('admin.companie-liste.edit', $listecompanies->id)}}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('liste_company_delete')
                                                <form action="{{route('admin.companie-liste.destroy',$listecompanies->id)}}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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