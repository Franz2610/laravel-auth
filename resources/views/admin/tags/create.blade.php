{{-- @extends('layouts.admin')

@section('content')
    <h1>Create Newtag</h1>
    <form action="{{ route('admin.tags.store') }}" method="POST" enctype="multipart/form-data">
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
        <label for="thumb" class="form-label text-white">Seleziona tecologia</label>
        <select class="form-select " name="typemodel_id" id="typemodel_id">

            <option selected class="text-white">Seleziona tecnologia</option>
            @foreach ($typemodels as $typemodel)
                <option value="{{ $typemodel->id }} "
                    {{ $typemodel->id == old('type_id', $tag->typemodel_id) ? 'selected' : '' }}>
                    {{ $typemodel->name }}</option>
            @endforeach

        </select>
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
        <button type="submit" class="btn btn-success">Save</button>
        <button type="reset" class="btn btn-primary">Reset</button>
    </form>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection --}}
