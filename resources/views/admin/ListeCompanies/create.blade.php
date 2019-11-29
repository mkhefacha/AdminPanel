@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                       creer liste
                    </div>
                    <div class="panel-body">

                        <form action="{{route('admin.companie-liste.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">{{ trans('cruds.user.fields.name') }}*</label>
                                <input type="text" id="liste_name" name="liste_name" class="form-control" required>
                                @if($errors->has('liste_name'))
                                    <p class="help-block">
                                        {{ $errors->first('liste_name') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.user.fields.name_helper') }}
                                </p>
                            </div>

                            <div class="form-group ">
                                <label for="company">{{ trans('cruds.contactContact.fields.company') }}*</label>
                                <select name="company_id" id="company" class="form-control select2" required>
                                    <option value="sélectionner" selected>sélectionner</option>
                                    @foreach($companies as $company)
                                        @if($company->status=="Active")
                                            <option value="{{ $company->id }}"{{$listeCompany->company_id == $company->id ?'selected' : ''}}>{{ $company->company_name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if($errors->has('company_id'))
                                    <p class="help-block">
                                        {{ $errors->first('company_id') }}
                                    </p>
                                @endif
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