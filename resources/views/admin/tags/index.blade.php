@extends('layouts.admin')

@section('content')
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif
<div class="text-center m-5">
    <h1>Aggiungiti al team di CREATOR</h1>
    <a class="btn btn-success" href="{{ route('admin.tags.create') }}">Crea nuovo tag</a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Create</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
            <tr>
                <th scope="row">{{ $tag->id }}</th>
                <td> {{$tag->name}} </td>
                <td> {{$tag->created_at}} </td>
                {{-- <td class="d-flex justify-content-between"> <a class="m-1" href="{{ route('admin.tags.show') }}"><button class="btn btn-warning"> Show</button></a>
                 <a class="m-1" href="{{ route('admin.tags.edit') }}"><button class="btn btn-success"> Edit</button></a>
                <form action="{{route('admin.tags.destroy')}}" method="POST">
                   @csrf
                   @method("DELETE")
                        <button  class="btn btn-danger m-1" type="submit">Delete</button>
                    </form>
                </td> --}}



              </tr>
            @endforeach
        </tbody>
      </table>

</h1>
@endsection
