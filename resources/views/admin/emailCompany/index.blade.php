@extends('layouts.admin')
@section('content')
    <div class="content">
        @can('sms_create')
            <div style="margin-bottom: 10px;" class="row">
                <div class="col-lg-12">
                    <a class="btn btn-success" href="{{ route("admin.email-companie.create") }}">
                      Ajouter Email
                    </a>
                </div>
            </div>
        @endcan
        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Email
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class=" table table-bordered table-striped table-hover datatable datatable-ListeCompany">
                                <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        Email_name
                                    </th>

                                    <th>
                                        object
                                    </th>

                                    <th>
                                        Message
                                    </th>

                                    <th>
                                        Company_name
                                    </th>


                                    <th>
                                        Réaliser par
                                    </th>
                                    <th>
                                        date creation
                                    </th>

                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                </thead>

                                @if(auth()->user()->hasRole('Superadmin'))
                                    <tbody>
                                    @include('admin.emailCompany.adminmail')
                                    </tbody>
                                @else
                                    <tbody>
                                    @include('admin.emailCompany.usermail')
                                    </tbody>
                                @endif
                            </table>
                        </div>


                    </div>
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
                    @can('email_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{route('admin.email-companie.massDestroy')}}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
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
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[1, 'asc']],
                pageLength: 25,
            });
            $('.datatable-ListeCompany:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
@endsection