@foreach($smsCompany as $sms_companie)

    <tr data-entry-id="{{$sms_companie->id}}">
        <td>

        </td>
        <td>
            {{$sms_companie->name_sms ?? ''  }}
        </td>
        <td>
            {{$sms_companie->company->company_name ?? ''}}
        </td>
        <td>
            {!!$sms_companie->message_sms ?? '' !!}
        </td>

        <td>
            {{$sms_companie->creer_sms ?? ''  }}
        </td>
        <td>
            {{ucwords($sms_companie->created_at->formatlocalized('%d %b %G'))}}
        </td>

        <td>
            @can('sms_show')
                <a class="btn btn-xs btn-primary" href="{{route('admin.sms-company.show',$sms_companie->id)}}">
                    {{ trans('global.view') }}
                </a>
            @endcan

            @can('sms_edit')
                <a class="btn btn-xs btn-info" href="{{route('admin.sms-company.edit', $sms_companie->id)}}">
                    {{ trans('global.edit') }}
                </a>
            @endcan

            @can('sms_delete')
                <form action="{{route('admin.sms-company.destroy',$sms_companie->id)}}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                </form>
            @endcan

        </td>

    </tr>
@endforeach