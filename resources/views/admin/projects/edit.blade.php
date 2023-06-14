@extends('layouts.admin')

@section('content')
    <h1>Edit Projects {{$project->name}}</h1>
    <form action="{{ route('admin.projects.update' , $project->slug) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invali

            @enderror" name="name" id="name" required maxlength="150" minlength="1" value="{{old('name', $project->name)}}">

            @error('name')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="languages">Name</label>
            <input type="text" class="form-control @error('languages') is-invali

            @enderror" name="languages" id="languages" required maxlength="150" minlength="1" value="{{old('languages', $project->languages)}}">

            @error('name')
            <div class="invalid-feedback">
                 {{$message}}
            </div>

            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Image</label>
            <input type="url" class="form-control @error('image') is-invali

            @enderror" name="image" id="image" value="{{old('image', $project->image)}}">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror
        </div>
        <label for="thumb" class="form-label text-white">Seleziona tecologia</label>
        <select class="form-select " name="typemodel_id" id="typemodel_id">

            <option selected class="text-white">Seleziona tecnologia</option>
            @foreach ($typemodels as $typemodel)
                <option value="{{ $typemodel->id }} "
                    {{ $typemodel->id == old('type_id', $project->typemodel_id) ? 'selected' : '' }}>
                    {{ $typemodel->name }}</option>
            @endforeach

        </select>
        {{-- <div class="mb-3">
            <label for="bodytext">Body Text</label>
            <textarea name="bodytext" id="bodytext" rows="10" class="form-control @error('bodytext') is-invali

            @enderror" value="{{old('bodytext', $project->bodytext)}}"></textarea>
            @error('bodytext')
            <div class="invalid-feedback">
                {{$message}}
           </div>

            @enderror
        </div> --}}
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
