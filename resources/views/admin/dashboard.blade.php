@extends('admin.layouts.app')

@section('title')
Dashboard
@endsection


@section('content')


<div class="main-content-inner">
     
    <div class="row">
        <div class="col-12 mt-5">
            
            @include('admin.layouts.flash')

            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Welcome {{ Auth::user()->name }} </h4>                   
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum quos esse repudiandae magni quas ullam dignissimos vero provident alias minus quam eius, voluptatem illum facilis ipsa possimus cupiditate odit non.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


