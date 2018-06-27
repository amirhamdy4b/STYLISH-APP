@extends('master')
@section('title', 'Users Page')
@section('banner')
    @include('shared.small_banner')
@endsection
@section('content')
    <!--about-team-->
    <div class="about-team">
        <div class="container">
            <h3 class="title">All Users</h3>
            <div class="row team-row">
                @foreach($users as $user)
                    <div class="col-md-3 team-grids">
                        <div class="thumbnail team-thmnl">
                            <img src="images/default-profile.png" class="img-responsive zoom-img" alt="...">
                            <div class="caption">
                                <h4><a href="#">{{$user->f_name.$user->l_name}}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//about-team-->
@endsection