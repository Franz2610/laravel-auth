@extends('layouts.admin')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="text-center m-5">
    <h1>Aggiungiti al team di CREATOR</h1>
    <a class="btn btn-success" href="{{ route('admin.projects.create') }}">Crea nuovo project</a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Create</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td> {{$project->name}} </td>
                <td><img src="{{$project->image}}" alt="{{$project->title}}"></td>
                <td> {{$project->created_at}} </td>
                <td class="d-flex justify-content-between"> <a class="m-1" href="{{ route('admin.projects.show', $project->slug) }}"><button class="btn btn-warning"> Show</button></a>
                 <a class="m-1" href="{{ route('admin.projects.edit', $project->slug) }}"><button class="btn btn-success"> Edit</button></a>
                <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                   @csrf
                   @method("DELETE")
                        <button  class="btn btn-danger m-1" type="submit">Delete</button>
                    </form>
                </td>



              </tr>
            @endforeach
        </tbody>
      </table>

</h1>
@endsection
