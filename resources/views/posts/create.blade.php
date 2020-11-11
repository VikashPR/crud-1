
@extends('layouts.crud')

@section('title')
    POSTS
@endsection

@section('content')
<h1>Create a POST</h1>
<form action="{{ action('PostController@store') }}" method="post">
    @csrf
<div class="form-group">
<label><h4>Title</h4></label>
<input name="title" class="form-control" type="text" placeholder="TITLE">
</div>
<div class="form-group">
<label><h4>Body</h4></label>
<textarea name="body" placeholder="Body" class="form-control" cols="30" rows="10"></textarea>
</div>
 <button type="submit" class="btn btn-outline-success">Submit</button>

</form>

@endsection

