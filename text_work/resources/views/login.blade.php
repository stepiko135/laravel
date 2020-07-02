@extends('layouts.auth_template')

@section('title','Login')

@section('forms')
<form class="p-5 text-right" action="#" method="POST">
@csrf
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">E-Mail Address</label>
        <input id="email" class="col-sm-8 form-control" type="email" name="email" placeholder="your-mail@example.com" autofocus>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-4">Password</label>
        <input id="password" class="col-sm-8 form-control" type="password" name='password' placeholder="Password">
    </div>
    <div class="form-group row text-left">
        <div class="col-sm-4"></div>
        <div class="form-check col-sm-8">
            <label for="remember" class="form-check-label">
                <input id="remember" class="form-check-input" type="checkbox" value="1">
                Remember Me</label>
        </div>
    </div>
    <div class="form-group row text-left">
        <div class="offset-sm-4 col-sm-8 p-0">
            <input class="btn btn-primary" type="submit" value='Login'>
            <a class="p-2" href="#">Forgot Your Password?</a>
        </div>
    </div>

</form>
@endsection