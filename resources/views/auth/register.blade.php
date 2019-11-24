@extends('admin.layouts.app')

@section('title')
Register Applicant
@endsection

@section('content')
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('register') }}">
                <div class="login-form-head">
                    <h4>Register Applicant</h4>
                   
                </div>
                <div class="login-form-body">
                    @csrf

                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        
                        @error('name')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>ID Type</label>
                        <select name="id_type" class="form-control sas-select">
                            <option value=""> - Select ID Type - </option>
                            <option value="MyKad"> MyKad </option>
                            <option value="Passport"> Passport </option>
                        </select>
                        
                        @error('id_type')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>ID Number</label>
                        <input type="text" class="form-control" name="id_number" value="{{ old('id_number') }}">
                        
                        @error('id_number')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Date Of Birth</label>
                        <input type="text" class="form-control datepicker" name="date_of_birth" value="{{ old('date_of_birth') }}">
                        
                        @error('date_of_birth')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Mobile Number</label>
                        <input type="text" class="form-control" name="mobile_no" value="{{ old('mobile_no') }}">
                        
                        @error('mobile_no')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                        
                        @error('username')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        
                        @error('email')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" >
                        
                        @error('password')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Re-type Password</label>
                        <input type="password" class="form-control" name="password_confirmation" >
                        
                        @error('password_confirmation')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input type="hidden" name="level" value="2">
                    
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Register Now <i class="ti-arrow-right"></i></button>                            
                    </div>
                
                    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
