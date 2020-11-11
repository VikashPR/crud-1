
@extends('layouts.crud')

@section('title')
    POSTS
@endsection

@section('content')
<H1>POSTS</H1>
<br><br> 

    @if (count($posts)>0)  
        @foreach ($posts as $post) 
            <div class="card card-body bg-light">
            <h3><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3> 
                <small>{{$post->created_at}}</small> 
            </div>
       @endforeach
            {{$posts->links()}}
   @else
   <h3>No Post found</h3>
       
   @endif
@endsection

