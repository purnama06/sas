@extends('admin.layouts.app')

@section('title')
Add New University Admin
@endsection

@section('content')
<div class="main-content-inner">
     
    <div class="row">
        <div class="col-md-8 mt-5">
            @include('admin.layouts.flash')
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="level" value="1">
                        <div class="form-group">
                            <label class="col-form-label">Name</label>
                            <input class="form-control" type="text" value="{{ old('name') }}" name="name">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Username</label>
                            <input class="form-control" type="text" value="{{ old('username') }}" name="username">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                            <input class="form-control" type="text" value="{{ old('email') }}" name="email">
                        </div>
                        
                        <div class="form-group">
                            <label class="col-form-label">Password</label>
                            <input class="form-control" type="password" value="{{ old('password') }}" name="password">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Re-type Password</label>
                            <input class="form-control" type="password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">University</label>
                            <select name="university_id" class="form-control">
                                <option value="#"> - Select university - </option>
                                @foreach($universities as $university)
                                    <option value="{{ $university->id }}" {{ old('university_id') == $university->id ? 'selected' : '' }}>{{ $university->university_name }}</option>
                                @endforeach
                            </select>
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