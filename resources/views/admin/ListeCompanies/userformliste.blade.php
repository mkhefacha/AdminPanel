
@foreach($listecopmpany as $companie_liste)

     @if  ((auth()->id()==$companie_liste->user_id) || ( auth()->user()->hasrole('admin') && (auth()->user()->company_id == $companie_liste->company_id)))
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
                <a class="btn btn-xs btn-primary" href="{{route('admin.companie-liste.show', $companie_liste->id)}}">
                    {{ trans('global.view') }}
                </a>
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
    @endif
@endforeach