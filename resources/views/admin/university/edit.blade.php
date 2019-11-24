@extends('admin.layouts.app')

@section('title')
Add New University
@endsection

@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-md-8 mt-5">
            @include('admin.layouts.flash')
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('university.update', $university->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-form-label">University Name</label>
                            <input class="form-control" type="text" value="{{ $university->university_name }}" name="university_name">
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