@extends('layouts.main_template')

@section('title','Dashboard')

@section('header-right')
<nav class="header-right ml-sm-auto pr-5">
    <div class="dropdown">
        <button type="button" class=" m-0 btn text-dark dropdown-toggle" data-toggle="dropdown">
            {{$name}}
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/">Log Out</a>
        </div>
    </div>
</nav>
@endsection

@section('forms')
    <p>ようこそ、{{$name}}さん</p>
    <p>{{$msg}}</p>    
@endsection