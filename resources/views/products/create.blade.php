@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                            <label class="ml-4" for="name">Categorie</label>
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
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $('select').selectpicker();
</script>
@endsection