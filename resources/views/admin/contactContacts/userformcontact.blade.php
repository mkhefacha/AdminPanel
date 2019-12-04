@foreach($contactContacts as $contactContact)
    @if  ((auth()->user()->company_id == $contactContact->company_id) || ( auth()->user()->hasrole('admin') && (auth()->user()->company_id == $contactContact->company_id)))
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
            {{ $contactContact->ListeCompany->liste_name ?? ''}}
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
            @can('contact_contact_show')
                <a class="btn btn-xs btn-primary" href="{{ route('admin.contact-contacts.show', $contactContact->id) }}">
                    {{ trans('global.view') }}
                </a>
            @endcan

            @can('contact_contact_edit')
                <a class="btn btn-xs btn-info" href="{{ route('admin.contact-contacts.edit', $contactContact->id) }}">
                    {{ trans('global.edit') }}
                </a>
            @endcan

            @can('contact_contact_delete')
                <form action="{{ route('admin.contact-contacts.destroy', $contactContact->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                </form>
            @endcan

        </td>

    </tr>
    @endif
@endforeach