@extends('layouts.admin')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Event
                    </div>
                    <div class="panel-body">

                        <form action="{{ route("admin.event.update", [$event->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group {{ $errors->has('event_name') ? 'has-error' : '' }}">
                                <label for="event_name">name</label>
                                <input type="text" id="event_name" name="event_name" class="form-control" value="{{$event->event_name}}">
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
                                <input type="date" id="date_lanch" name="date_lanch" class="form-control"  value="{{$event->date_lanch}}">
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
                                @include('admin.event.adminmodifier')
                            @else
                                @include('admin.event.usermodifier')
                            @endif

                            <div class="form-group">
                            <label for="active">Status*</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" disabled>Select Status</option>
                                <option value="1" {{$event->status=='deja lancé' ? 'selected':''}}>deja lancé</option>
                                <option value="0"{{$event->status=='en attente' ? 'selected':''}}>en attente</option>
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