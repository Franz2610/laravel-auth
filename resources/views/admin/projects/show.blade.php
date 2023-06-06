@extends('layouts.admin')

@section('content')

    <h1> {{$project->name}} </h1>
    <img src="{{$project->image}}" alt="{{$project->name}}">
    <p> {{$project->bodytext}} </p>
    <a href=" {{route('admin.posts.index')}}">Project Start</a>
@endsection
