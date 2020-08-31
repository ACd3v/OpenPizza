@extends('layouts.app_admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="col-md-12">

        <form action="/categories/{{ $category->id }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary ">Modifica: {{ $category->name }}</h5>
                        </div>

                        <div class="card-body">
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="name" class="font-weight-bold text-dark">Nome</label>
                                        <input type="text" class="form-control" name="name" id=""
                                            value="{{ $category->name }}">
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-primary">Salva</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection