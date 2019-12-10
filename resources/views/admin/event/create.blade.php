@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                     Ajouter Event
                    </div>
                    <div class="panel-body">

                        <form action="{{ route("admin.event.store") }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group {{ $errors->has('event_name') ? 'has-error' : '' }}">
                                <label for="event_name">name</label>
                                <input type="text" id="event_name" name="event_name" class="form-control">
                                @if($errors->has('event_name'))
                                    <p class="help-block">
                                        {{ $errors->first('event_name') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.contactContact.fields.contact_first_name_helper') }}
                                </p>
                            </div>

                            <div class="form-group {{ $errors->has('date_lanch') ? 'has-error' : '' }}">
                                <label for="contact_phone_1">date de lancement</label>
                                <input type="date" id="date_lanch" name="date_lanch" class="form-control">
                                @if($errors->has('date_lanch'))
                                    <p class="help-block">
                                        {{ $errors->first('date_lanch') }}
                                    </p>
                                @endif
                                <p class="helper-block">
                                    {{ trans('cruds.contactContact.fields.contact_phone_1_helper') }}
                                </p>
                            </div>



                            @if(auth()->user()->hasRole('Superadmin'))
                                <div class="form-group ">
                                    <label for="company">{{ trans('cruds.contactContact.fields.company') }}*</label>
                                    <select name="company_id" id="company" class="form-control select2" required>
                                        <option value="sélectionner"  disabled >Select companies</option>
                                        @foreach($companies as $company)
                                            @if($company->status=="Active")
                                                <option value="{{ $company->id }}">{{$company->company_name}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('company_id'))
                                        <p class="help-block">
                                            {{ $errors->first('company_id') }}
                                        </p>
                                    @endif
                                </div>

                                <div class="form-group {{ $errors->has('liste_id') ? 'has-error' : '' }}">
                                    <label for="liste">liste*</label>
                                    <select name="liste_id" id="liste" class="form-control select2" required>
                                        <option value="sélectionner"  disabled >Select listes</option>
                                        @foreach($listes as $liste)
                                            <option value="{{ $liste->id }}">{{ $liste->liste_name }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('liste_id'))
                                        <p class="help-block">
                                            {{ $errors->first('liste_id') }}
                                        </p>
                                    @endif
                                </div>
                            @else

                                <div class="form-group">
                                    <label for="name">{{ trans('cruds.contactContact.fields.company') }}*</label>
                                    <select name="company_id" id="company" class="form-control select2">
                                        @foreach ( $companies as $company)
                                            @if(auth()->user()->company_id == $company->id)
                                                <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group {{ $errors->has('liste_id') ? 'has-error' : '' }}">
                                    <label for="liste">liste*</label>
                                    <select name="liste_id" id="liste" class="form-control select2" required>
                                        <option value="sélectionner"  disabled >Select listes</option>
                                        @foreach($listes as $liste)
                                            @if(auth()->user()->company_id== $liste->company_id)
                                                <option value="{{ $liste->id }}">{{ $liste->liste_name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @if($errors->has('liste_id'))
                                        <p class="help-block">
                                            {{ $errors->first('liste_id') }}
                                        </p>
                                    @endif
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="status">Status*</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="" disabled>Select Status</option>
                                    <option value="1">deja lancé</option>
                                    <option value="0">en attente</option>
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