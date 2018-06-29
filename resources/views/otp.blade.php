@extends('layouts.app')
@section('content')
<pre>
<?php
$user = Auth::user();
echo $user->otp;

?>
</pre>
<div class="login-box">
  <div class="login-logo">
  <img src="{{ asset('img/logo.png') }}" width="310px">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg">Welcome {{$user->fname}} {{$user->lname}}</h3>
    <p class="login-box-msg text-red">Please enter your <b>OTP</b> to proceed further.<br><b>OTP</b> has been sent on your registered mobile number.</p>

    <form method="POST" action="{{ route('login') }}">
    @csrf
      <div class="form-group has-feedback">
        <input id="otp" type="number" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="otp" value="{{ old('otp') }}" placeholder="One Time Password" required autofocus >
        <span class="fa fa-key form-control-feedback"></span>
        @if ($errors->has('otp'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('otp') }}</strong>
            </span>
        @endif
      </div>
      
      <div class="row">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary btn-flat" style="background-color: #cfa54b;">
            {{ __('Login') }}
          </button>
          <button class="btn btn-danger btn-flat" href="{{ route('logout') }}" style="margin-right: 15px;"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
          </button>
        </div>
        
        <p class="login-box-msg text-red">Your OTP is: 123456</p>
        <!-- /.col -->
      </div>
    </form>
    <!-- Logout Form-->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>  
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection