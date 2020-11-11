@extends('layouts.crud')

@section('title')
{{config('app.name')}}
@endsection

@section('content')

<div class="jumbotron text-center">
    <h1>{{$message}}</h1>
    <br>
    This is the laravel application done by vikash </>
    <p><a href="/lsapp/public/login" class="btn btn-success">Login</a> <a href="/lsapp/public/register"
            class="btn btn-primary">signup</a></p>
</div>
@endsection
