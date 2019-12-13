@foreach( $companie_liste->contactContacts as $contactContact)
    @if (auth()->user()->company_id==$contactContact->company_id)
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
                @can('liste_company_show')
                    <a class="btn btn-xs btn-primary"
                       href="{{ route('admin.contact-contacts.show', $contactContact->id) }}">
                        {{ trans('global.view') }}
                    </a>
                @endcan

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

            </td>

        </tr>
    @endif
@endforeach