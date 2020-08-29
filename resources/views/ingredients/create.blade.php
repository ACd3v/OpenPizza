@extends('layouts.app_admin')

@section('content')
<div class="container">
    <div class="col-sm-8 offset-sm-2">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4 mt-sm-5">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary text-center">Aggiungi un Ingrediente</h3>
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
@endsection