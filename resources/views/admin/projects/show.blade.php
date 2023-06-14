@extends('layouts.admin')

@section('content')
<div>
    <h1>Show Project</h1>
    <h1> {{$project->name}} </h1>
    <img src="{{$project->image}}" alt="{{$project->name}}">
    <p> {{$project->bodytext}} </p>
    <div>
        @if ($project->tags && count($project->tags) > 0)
            <div>
                 @foreach ($project->tags as $tag)
                 <p>{{$tag->slug}}</p>
                 <p> {{$tag->name}} </p>
                    {{-- <a href="{{ route('admin.projects.show', $tag->slug) }}"
                                                class="badge rounded-pill bg-primary text-white">{{ $tag->name }}</a> --}}
                    @endforeach
            </div>
         @endif
    </div>
    <a href=" {{route('admin.projects.index')}}">Project Start</a>
</div>


@endsection
