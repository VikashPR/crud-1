
@extends('layouts.crud')

@section('title')
{{config('app.name')}}
@endsection

@section('content')

<div class="jumbotron text-center">
    <h1>{{$message}}</h1>
<p>This application is made by vikash</p>
    @guest
    <p><a href="/lsapp/public/register" class="btn btn-success">signup</a>
        @if (Route::has('register'))
        <a href="/lsapp/public/login" class="btn btn-primary">login</a></p>

    @endif
    @else
    @include('home')
    @endguest
</div>
@endsection
