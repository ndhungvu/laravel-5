@extends('layouts.login')
@section('content')

<div class="login-box-body">
    <p class="login-box-msg">Sign in</p>
    @include('masters.message')
    {!! Form::open(array('url'=>'admin/login','action'=>'post')) !!}
        <div class="form-group has-feedback">
            {!! Form::email('email', null, array('placeholder'=>'Email','class'=>'form-control')) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!! Form::password('password', array('placeholder'=>'Password','class'=>'form-control')) !!}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        {!! Form::checkbox('remember',false, false) !!} Remember Me
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                {!! Form::submit('Sign In',array('class'=>'btn btn-primary btn-block btn-flat')) !!}
            </div>
        </div>
    {!! Form::close() !!}
    <!--<div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
    </div>-->
    <a href="#">Forgot password</a><br>
</div>
@stop