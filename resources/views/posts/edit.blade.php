@extends('layouts.crud')

@section('title')
EDIT
@endsection

@section('content')

<h1>Edit Post</h1>

<form action="{{ action('PostController@update',$post->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>
            <h4>Title</h4>
        </label>
        <input name="title" class="form-control" type="text" value="{{$post->title}}">
    </div>
    <div class="form-group">
        <label>
            <h4>Body</h4>
        </label>
        <textarea name="body" placeholder="Body" class="form-control" cols="30" rows="10">{{$post->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-success">Submit</button>

</form>

@endsection
