@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard da Utente') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{--                    {{ __('You are logged in!') }}--}}
                    <a class="btn btn-primary btn-lg btn-block" href="{{ route('create.order') }}" role="button">Crea un
                        Ordine</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection