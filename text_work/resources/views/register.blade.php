@extends('layouts.main_template')

@section('title','Register')

@section('header-right')
<nav class="header-right ml-sm-auto pr-5">
    <a class="p-2 text-dark" href="/">Login</a>
    <a class="p-2 text-dark" href="/register">Register</a>
</nav>
@endsection

@section('forms')
<form class="p-5" action="#" method="POST">
@csrf
<div class="text-danger pl-5">
    @error('name')
    <li> {{$message}}</li>        
    @enderror
     @error('email')
    <li> {{$message}}</li>        
    @enderror
    @error('passwd')
     <li> {{$message}}</li>        
    @enderror
    @error('passwd_confirmation')
    <li> {{$message}}</li>        
    @enderror
</div>

<div class="text-right">
    <div class="form-group row">
        <label for="name" class="col-sm-4 col-form-label " >Name</label>
        <input type="text" value="{{old('name')}}" name="name" id="name" class="col-sm-8 form-control" placeholder="John Smith" autofocus>
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">E-Mail Address</label>
        <input type="email" value="{{old('email')}}"name="email" id="email" class="col-sm-8 form-control" placeholder="your-mail@example.com">
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-4 col-form-label">Password</label>
        <input type="password" name="passwd" id="passwd" class="col-sm-8 form-control" placeholder="Password">
    </div>
    <div class="form-group row">
        <label for="confirm_pass" class="col-sm-4 col-form-label">Confirm Password</label>
        <input type="password" name="passwd_confirmation" id="passwd_confirmation" class="col-sm-8 form-control"placeholder="Password">
    </div>
</div>

<div class="form-group row">
    <div class="offset-4 col-sm-8 p-0">
        <input type="submit" value="Register" class="btn btn-primary ">
    </div>
</div>
</form>

    
@endsection