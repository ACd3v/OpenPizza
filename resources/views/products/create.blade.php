@extends('layouts.app_admin')

@section('content')
<div class="container">
    {{-- <div class="row"> --}}

    <div class="col-sm-8 offset-sm-2">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4 mt-sm-5">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary text-center">Aggiungi un Prodotto</h3>
            </div>
            <div class="card-body">
                <form action="/products" method="POST">
                    @csrf
                    <div class="col-md-12 form-group">
                        <label class="ml-2" for="name">Nome</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                            placeholder="Inserisci il nome" name="name" value="{{ old('name') }}">

                        @error('name')
                        <p class="help invalid-feedback">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="ml-4" for="name">Ingredienti</label>
                        <select class="col-md-12 selectpicker" name="ingredients_id[] " multiple>
                            @forelse ($ingredients as $ingredient)
                            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
                            @empty
                            <p>Nessun ingrediente disponibile</p>
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="ml-4" for="name">Categoria</label>
                        <select class="col-md-12 selectpicker" name="category_id[]">
                            @forelse ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty

                            @endforelse
                        </select>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
{{-- </div> --}}


{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Aggiungi un Prodotto</h2>
            </div>
            <div class="card-body">
                <form action="/products" method="POST">
                    @csrf
                    <div class="col-md-12 form-group">
                        <label class="ml-2" for="name">Nome</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                            placeholder="Inserisci il nome" name="name" value="{{ old('name') }}">

@error('name')
<p class="help invalid-feedback">{{ $message }}</p>
@enderror
</div>

<div class="form-group">
    <label class="ml-4" for="name">Ingredienti</label>
    <select class="col-md-12 selectpicker" name="ingredients_id[] " multiple>
        @forelse ($ingredients as $ingredient)
        <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
        @empty
        <p>Nessun ingrediente disponibile</p>
        @endforelse
    </select>
</div>

<div class="form-group">
    <label class="ml-4" for="name">Categoria</label>
    <select class="col-md-12 selectpicker" name="category_id[]">
        @forelse ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @empty

        @endforelse
    </select>
</div>

<div class="text-center mt-4">
    <button type="submit" class="btn btn-success">Save</button>
</div>
</div>
</form>

</div>
</div>
</div>
</div>
</div> --}}
@endsection

@section('scripts')
<script type="text/javascript">
    $('select').selectpicker();
</script>
@endsection