@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>{{ __('You are logged in!')}}</h3>
                    <h3>{{ Auth::user()->name }} </h3>
                    <br>
                    <br>
                    <br>

                    @if (Route::has('register'))
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th>FUNCTION</th>
                        </tr>
                        @if (count($posts)>0)
                        @foreach ($posts as $post)

                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">EDIT</a></th>
                            <th><a href="/lsapp/public/posts/create" class="btn btn-info text-white">Create_Blog</a></th>
                            <th><a href="/lsapp/public/posts/" class="btn btn-success">View_Blog</a></th>
                        </tr>
                        @endforeach
                        @else
                        <h3>No Post Found</h3>
                        @endif

                    </table>
                    @else
                    <p><a href="/lsapp/public/register" class="btn btn-success">signup</a>
                        <a href="/lsapp/public/login" class="btn btn-primary">login</a></p>

                    @endif
                </div>
            </div>
        </div>
    </div>
    @endsection
