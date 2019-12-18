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
            {{ $events->ListeCompanie->liste_name ?? ''}}
        </td>
        <td>
            {{ $events->date_lanch ?? '' }}
        </td>



        <td>
            {{ $events->creer ?? '' }}
        </td>


        <td>
            {{ $events->smscompanies->name_sms ?? '' }}
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