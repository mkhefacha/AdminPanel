
    @foreach($contactCompanies as $key => $contactCompany)
        @if(auth()->user()->company_id == $contactCompany->id)
        <tr data-entry-id="{{ $contactCompany->id }}">
            <td>
            </td>
            <td>
                {{ $contactCompany->id ?? '' }}
            </td>
            <td>
                {{ $contactCompany->company_name ?? '' }}
            </td>
            <td>
                {{ $contactCompany->company_address ?? '' }}
            </td>
            <td>
                {{ $contactCompany->company_website ?? '' }}
            </td>
            <td>
                {{ $contactCompany->company_email ?? '' }}
            </td>
            <td>
                {{ $contactCompany->nbr_sms ?? '' }}
            </td>
            <td>
                {{ $contactCompany->nbr_email ?? '' }}
            </td>
            <td>
                @if($contactCompany->status=='Active')<span class="label label-success">Active</span>
                @else
                    <span class="label label-danger">Inactive</span>
                @endif
            </td>
            <td>
                @can('contact_company_show')
                    <a class="btn btn-xs btn-primary" href="{{ route('admin.contact-companies.show', $contactCompany->id) }}">
                        {{ trans('global.view') }}
                    </a>
                @endcan

                @can('contact_company_edit')
                    <a class="btn btn-xs btn-info" href="{{ route('admin.contact-companies.edit', $contactCompany->id) }}">
                        {{ trans('global.edit') }}
                    </a>
                @endcan

                @can('contact_company_delete')
                    <form action="{{ route('admin.contact-companies.destroy', $contactCompany->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                    </form>
                @endcan

            </td>

        </tr>
        @endif
    @endforeach