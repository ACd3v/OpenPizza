@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard da Amministratore') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a class="btn btn-primary" href="{{ route('create.category') }}" role="button">Aggiungi una
                        Categoria</a>
                    <a class="btn btn-primary" href="{{ route('create.product') }}" role="button">Aggiungi un
                        Prodotto</a>
                    <a class="btn btn-primary" href="{{ route('create.ingredient') }}" role="button">Aggiungi un
                        Ingrediente</a>

                    {{-- <a class="btn btn-primary btn-lg btn-block" href="/orders/create" role="button">Crea un Ordine</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection