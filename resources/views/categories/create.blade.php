@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Crea una Categoria</h2>
                </div>
                <div class="card-body">
                    <form action="/categories" method="POST">
                        @csrf
                        <input class="form-control" type="text" placeholder="Inserisci il nome" name="name">

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