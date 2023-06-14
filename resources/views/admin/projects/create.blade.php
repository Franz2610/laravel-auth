@extends('layouts.admin')

@section('content')
    <h1>Create NewProject</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invali

            @enderror" name="name" id="name">

            @error('name')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="languages">Languages</label>
            <input type="text" class="form-control @error('languages') is-invali

            @enderror" name="languages" id="languages" >

            @error('languages')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control @error('image') is-invali

            @enderror" name="image" id="image">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror
        </div>
        <div class="form-group p-4">
            <p>Seleziona Tag</p>
            @foreach ($tags as $tag )
            <div>
                <input type="checkbox" name="tags[]" value="{{$tag->id}}" class="form-check-input" {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                <label for="" class="form-check-label"> {{$tag->name}} </label>
            </div>

            @endforeach

            @error('tags')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror

        </div>
        <div class="mb-3">
            <label for="bodytext">Body Text</label>
            <textarea name="bodytext" id="bodytext" rows="10" class="form-control @error('bodytext') is-invali

            @enderror"></textarea>
            @error('bodytext')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror
        </div>
        <div class="form-group">
            <p class="text-white">Select one or more tag:</p>
            @foreach ($tags as $tag)
                <div class="p-4">
                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="form-check-input"
                        {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                    <label for="tags[]" class="form-check-label">{{ $tag->name }}</label>
                </div>
            @endforeach
            @error('tags')
                <div class="invalid-feedback">{{ $message }}</div>
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
