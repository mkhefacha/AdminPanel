
@foreach($emailCompany as $email_companie)

    <tr data-entry-id="{{$email_companie->id}}">
        <td>

        </td>
        <td>
            {{$email_companie->name_email ?? ''  }}
        </td>

        <td>
            {{$email_companie->object ?? ''  }}
        </td>
        <td>
            {!!$email_companie->message_email ?? '' !!}
        </td>
        <td>
            {{$email_companie->company->company_name ?? ''}}
        </td>
        <td>
            {{$email_companie->creer_email ?? ''  }}
        </td>
        <td>
            {{ucwords($email_companie->created_at->formatlocalized('%d %b %G'))}}
        </td>

        <td>
            @can('email_show')
                <a class="btn btn-xs btn-primary" href="{{route('admin.email-companie.show',$email_companie->id)}}">
                    {{ trans('global.view') }}
                </a>
            @endcan

            @can('email_edit')
                <a class="btn btn-xs btn-info" href="{{route('admin.email-companie.edit', $email_companie->id)}}">
                    {{ trans('global.edit') }}
                </a>
            @endcan

            @can('email_delete')
                <form action="{{route('admin.email-companie.destroy',$email_companie->id)}}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                </form>
            @endcan

        </td>

    </tr>
@endforeach