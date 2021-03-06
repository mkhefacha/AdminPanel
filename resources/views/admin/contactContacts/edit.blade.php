@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('cruds.contactContact.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.contact-contacts.update", [$contactContact->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @if(auth()->user()->hasRole('Superadmin'))
                            @include('admin.contactContacts.adminformmodifie')
                            @else
                            @include('admin.contactContacts.usercontactmodifie')
                        @endif
                        <div class="form-group {{ $errors->has('contact_name') ? 'has-error' : '' }}">
                            <label for="contact_name">name</label>
                            <input type="text" id="contact_name" name="contact_name" class="form-control" value="{{ old('contact_name', isset($contactContact) ? $contactContact->contact_name : '') }}">
                            @if($errors->has('contact_name'))
                                <p class="help-block">
                                    {{ $errors->first('contact_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_first_name_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('contact_phone_1') ? 'has-error' : '' }}">
                            <label for="contact_phone_1">{{ trans('cruds.contactContact.fields.contact_phone_1') }}</label>
                            <input type="text" id="contact_phone_1" name="contact_phone_1" class="form-control" value="{{ old('contact_phone_1', isset($contactContact) ? $contactContact->contact_phone_1 : '') }}">
                            @if($errors->has('contact_phone_1'))
                                <p class="help-block">
                                    {{ $errors->first('contact_phone_1') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_phone_1_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('contact_phone_2') ? 'has-error' : '' }}">
                            <label for="contact_phone_2">{{ trans('cruds.contactContact.fields.contact_phone_2') }}</label>
                            <input type="text" id="contact_phone_2" name="contact_phone_2" class="form-control" value="{{ old('contact_phone_2', isset($contactContact) ? $contactContact->contact_phone_2 : '') }}">
                            @if($errors->has('contact_phone_2'))
                                <p class="help-block">
                                    {{ $errors->first('contact_phone_2') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_phone_2_helper') }}
                            </p>
                        </div>

                        <div class="form-group {{ $errors->has('contact_email') ? 'has-error' : '' }}">
                            <label for="contact_email">{{ trans('cruds.contactContact.fields.contact_email') }}</label>
                            <input type="text" id="contact_email" name="contact_email" class="form-control" value="{{ old('contact_email', isset($contactContact) ? $contactContact->contact_email : '') }}">
                            @if($errors->has('contact_email'))
                                <p class="help-block">
                                    {{ $errors->first('contact_email') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('cruds.contactContact.fields.contact_email_helper') }}
                            </p>
                        </div>

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