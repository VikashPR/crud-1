
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
 
    <h3>{{$post->body}}</h3>
</div>
<hr>
<small>{{$post->created_at}}</small> 

@endsection

