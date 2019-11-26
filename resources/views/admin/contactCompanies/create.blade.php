@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('cruds.contactCompany.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.contact-companies.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('company_name') ? 'has-error' : '' }}">
                            <label for="company_name">{{ trans('cruds.contactCompany.fields.company_name') }}* </label>
                            <input type="text" id="company_name" name="company_name" class="form-control" value="{{ old('company_name', isset($contactCompany) ? $contactCompany->company_name : '') }}">
                            @if($errors->has('company_name'))
                                <p class="help-block">
                                    {{ $errors->first('company_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('company_address') ? 'has-error' : '' }}">
                            <label for="company_address">{{ trans('cruds.contactCompany.fields.company_address') }}</label>
                            <input type="text" id="company_address" name="company_address" class="form-control" value="{{ old('company_address', isset($contactCompany) ? $contactCompany->company_address : '') }}">
                            @if($errors->has('company_address'))
                                <p class="help-block">
                                    {{ $errors->first('company_address') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_address_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('company_website') ? 'has-error' : '' }}">
                            <label for="company_website">{{ trans('cruds.contactCompany.fields.company_website') }}</label>
                            <input type="text" id="company_website" name="company_website" class="form-control" value="{{ old('company_website', isset($contactCompany) ? $contactCompany->company_website : '') }}">
                            @if($errors->has('company_website'))
                                <p class="help-block">
                                    {{ $errors->first('company_website') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_website_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('company_email') ? 'has-error' : '' }}">
                            <label for="company_email">{{ trans('cruds.contactCompany.fields.company_email') }}</label>
                            <input type="text" id="company_email" name="company_email" class="form-control" value="{{ old('company_email', isset($contactCompany) ? $contactCompany->company_email : '') }}">
                            @if($errors->has('company_email'))
                                <p class="help-block">
                                    {{ $errors->first('company_email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.company_email_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('nbr_sms') ? 'has-error' : '' }}">
                            <label for="nbr_sms">{{ trans('cruds.contactCompany.fields.nbr_sms') }}</label>
                            <input type="number" id="nbr_sms" name="nbr_sms" class="form-control" value="{{ old('nbr_sms', isset($contactCompany) ? $contactCompany->nbr_sms : '') }}">
                            @if($errors->has('nbr_sms'))
                                <p class="help-block">
                                    {{ $errors->first('nbr_sms') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.nbr_sms_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('nbr_email') ? 'has-error' : '' }}">
                            <label for="nbr_email">{{ trans('cruds.contactCompany.fields.nbr_email') }}</label>
                            <input type="number" id="nbr_email" name="nbr_email" class="form-control" value="{{ old('nbr_email', isset($contactCompany) ? $contactCompany->nbr_email : '') }}">
                            @if($errors->has('nbr_email'))
                                <p class="help-block">
                                    {{ $errors->first('nbr_email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactCompany.fields.nbr_email_helper') }}
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="active">Status*</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" disabled>Select Status</option>
                                <option value="1">Actif</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div> <br>


                        <div>
                            <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
                        </div>
                    </form>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection