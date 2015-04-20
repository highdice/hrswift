@extends('layouts.default'))

{{-- Web site Title --}}
@section('title')
HRSwift
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4 login-container">
        {{ Form::open(array('action' => 'login')) }}
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="{{ asset('images/logo_mini.png') }}" id="login-brand" class="img-responsive login-brand" />
            </div>

            @include('layouts.notifications')

            <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }} input-icon">
                {{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Enter your username', 'autofocus')) }}
                <i class="glyphicon glyphicon-user"></i>
                {{ ($errors->has('username') ? $errors->first('username') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }} input-icon" style="margin-top: 15px;">
                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Enter your password'))}}
                <i class="glyphicon glyphicon-lock"></i>
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>
            
            <label class="checkbox">
                {{ Form::checkbox('rememberMe', 'rememberMe') }} Remember me
            </label>
            {{ Form::submit('Sign In', array('class' => 'btn btn-primary'))}}
            <a class="btn btn-link" href="">Forgot Password</a>
        {{ Form::close() }}
    </div>
</div>
@stop