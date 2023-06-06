@extends('layouts.admin')

@section('content')
    <h1>Create Project</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title">Name</label>
            <input type="text" class="form-control @error('name') is-invali

            @enderror" name="title" id="title" required maxlength="150" minlength="1">

            @error('name')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="url" class="form-control @error('image') is-invali

            @enderror" name="image" id="image">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="body">Body Text</label>
            <textarea name="body" id="body" rows="10" class="form-control @error('bodytext') is-invali

            @enderror"></textarea>
            @error('bodytext')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
