@extends('admin.layouts.app')

@section('title')
Edit Programmes
@endsection

@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-md-8 mt-5">
            @include('admin.layouts.flash')
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('programme.update', $programme->id) }}" method="post">
                        @csrf
                        @method('put')

             
                        <div class="form-group">
                            <label class="col-form-label">University</label>
                            <input class="form-control" type="text" value="{{ Auth::user()->universityAdmin[0]['university_name'] }}" name="university_name" readonly>
                        </div>

                        <input type="hidden" name="university_id" value="{{ Auth::user()->universityAdmin[0]['id'] }}">

                        <div class="form-group">
                            <label class="col-form-label">Programme Name</label>
                            <input class="form-control" type="text" value="{{ $programme->programme_name }}" name="programme_name">
                        </div>
                        
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" name="description">{{ $programme->description }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-form-label">Closing Date</label>
                            <input class="form-control datepicker" type="text" value="{{ $programme->closing_date }}" name="closing_date">
                        </div>
                       
                       
                        <div class="form-group">
                            <input type="submit" class="btn btn-success float-right" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection