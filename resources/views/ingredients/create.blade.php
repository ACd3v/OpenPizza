@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Aggiungi un Ingrediente</h2>
                </div>
                <div class="card-body">
                    <form action="/ingredients" method="POST">
                        @csrf
                        <input class="form-control @error('name') is-invalid @enderror" type="text"
                            placeholder="Inserisci il nome" name="name" value="{{ old('name') }}">

                        @error('name')
                        <p class="help invalid-feedback">{{ $message }}</p>
                        @enderror

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