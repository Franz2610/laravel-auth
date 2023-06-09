@extends('layouts.admin')

@section('content')
<div>
    <h1>Show tag</h1>
    <h1> {{$tag->name}} </h1>
    <a href=" {{route('admin.tags.index')}}">tag Start</a>
</div>


@endsection
