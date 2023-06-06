@extends('layouts.admin')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="text-center m-5">
    <h1>Aggiungiti al team di CREATOR</h1>
    <a class="btn btn-success" href="{{ route('admin.posts.create') }}">Crea nuovo post</a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Create</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <th scope="row">{{ $post->id }}</th>
                <td> {{$post->title}} </td>
                <td><img src="{{$post->image}}" alt="{{$post->title}}"></td>
                <td> {{$post->created_at}} </td>
                <td class="d-flex justify-content-between"> <a class="m-1" href="{{ route('admin.posts.show', $post->slug) }}"><button class="btn btn-warning"> Show</button></a>
                 <a class="m-1" href="{{ route('admin.posts.edit', $post->slug) }}"><button class="btn btn-success"> Edit</button></a>
                   <form action="{{route('admin.posts.destroy', $post->slug)}}" method="POST">
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
