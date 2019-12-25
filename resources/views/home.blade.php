@extends('layouts.admin')
@section('content')
<div class="content">

            <div class="row">

                {{-- categories--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$companies_count}}</h3>

                            <p>Companies</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <a href="{{ route('admin.contact-companies.index') }}" class="small-box-footer">Companies<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--products--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>{{$events_count}}</h3>

                            <p>Evenements</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                        </div>
                        <a href="{{route('admin.event.index')}}" class="small-box-footer">Evenements<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                {{--clients--}}
                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>{{$users_count}}</h3>

                            <p>Utilisateurs</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{route('admin.users.index')}}" class="small-box-footer">Utilisateur<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class="col-lg-3 col-xs-6">
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$contacts_count}}</h3>

                            <p>Contacts</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <a href="{{route('admin.contact-contacts.index')}}" class="small-box-footer">Contactes<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

            </div><!-- end of row -->


    </div><!-- end of content wrapper -->


@endsection
@section('scripts')
@parent


@endsection