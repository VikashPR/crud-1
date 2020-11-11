@extends('layouts.crud')

@section('title')
{{$title}}
@endsection

@section('content')
<h1>SERVICES</h1>

@if(count($services) > 0)
<ul class="list-group">
    @foreach($services as $service)
    <li class="list-group-item">{{$service}}</li>
    @endforeach
</ul>
@endif

@endsection



{{-- @if(count($services) > 0)
    <ul>
        @foreach($services as $service)
        <li>{{$service}}</li>
@endforeach
</ul>
@endif --}}
