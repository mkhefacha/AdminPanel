@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        creer Email
                    </div>
                    <div class="panel-body">

                        <form action="{{route('admin.email-companie.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group {{ $errors->has('name_email') ? 'has-error' : '' }}">
                                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                                <input type="text" id="name_email" name="name_email" class="form-control" required>
                                @if($errors->has('name_email'))
                                    <p class="help-block">
                                        {{ $errors->first('name_email') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.user.fields.name_helper') }}
                                </p>
                            </div>

                            <div class="form-group {{ $errors->has('object') ? 'has-error' : '' }}">
                                <label for="name">object</label>
                                <input type="text" id="object" name="object" class="form-control" required>
                                @if($errors->has('name_email'))
                                    <p class="help-block">
                                        {{ $errors->first('object') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.user.fields.name_helper') }}
                                </p>
                            </div>



                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">message</label>
                                <textarea class="form-control rounded-0" id="message_email" name="message_email" rows="3" required>

                                </textarea>
                            </div>



                            @if(auth()->user()->hasRole('Superadmin'))
                                <div class="form-group ">
                                    <label for="company">{{ trans('cruds.contactContact.fields.company') }}*</label>
                                    <select name="company_id" id="company" class="form-control select2" required>
                                        <option value="sélectionner"  disabled >Select companies</option>
                                        @foreach($companies as $company)
                                            @if($company->status=="Active")
                                                <option value="{{ $company->id }}"{{$emailCompany->company_id == $company->id ?'selected' : ''}}>{{ $company->company_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('company_id'))
                                        <p class="help-block">
                                            {{ $errors->first('company_id') }}
                                        </p>
                                    @endif
                                </div>
                            @else
                                <div class="form-group">
                                    <label for="name">{{ trans('cruds.contactContact.fields.company') }}*</label>
                                    <select name="company_id" id="company" class="form-control select2">
                                        @foreach ($companies as $company)
                                            @if(auth()->user()->company_id == $company->id)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            @endif

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
