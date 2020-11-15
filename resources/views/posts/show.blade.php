
@extends('layouts.crud')

@section('title')
POSTS
@endsection

@section('content')
<a href="/lsapp/public/posts" class="btn btn-outline-dark">Go Back</a>
<br>
<div>
    <br>
    <h3>{{$post->title}}</h3>
    <medium>{{$post->body}}</medium>
</div>
<hr>
<small>{{$post->created_at}}</small>

<hr>
<br>
<a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

<form action="{{ action('PostController@destroy',$post->id) }}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger float-sm-right">DELETE</button>
</form>



@endsection

