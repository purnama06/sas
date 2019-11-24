@extends('admin.layouts.app')

@section('title')
Login
@endsection

@section('content')
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}">
                <div class="login-form-head">
                    <h4>Login</h4>
                   
                </div>
                <div class="login-form-body">
                    @csrf
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" id="exampleInputEmail1" name="username" value="{{ old('username') }}">
                        <i class="ti-user"></i>
                        @error('username')
                            <div class="text-danger">
                                <strong>{{ $message }}</strong>
                            </div>
                        @enderror
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" name="password" >
                        <i class="ti-lock"></i>
                        @error('password')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="row mb-4 rmber-area">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mr-sm-2">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                            </div>
                        </div>
                        
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>                            
                    </div>
                
                    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
