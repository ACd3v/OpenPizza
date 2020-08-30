@extends('layouts.app_admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="col-md-12">

        <form action="/products/{{ $product->id }}" method="post">
            @csrf
            @method('PUT')

            <div class="row">

                <div class="col-md-10 offset-md-1">
                    <!-- Basic Card Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h5 class="m-0 font-weight-bold text-primary ">Modifica: {{ $product->name }}</h5>
                        </div>

                        <div class="card-body">
                            <div class="form-group mb-2">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="name" class="font-weight-bold text-dark">Nome</label>
                                        <input type="text" class="form-control" name="name" id=""
                                            value="{{ $product->name }}">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="category" class="font-weight-bold text-dark">Categoria</label>
                                        <div class="form-group">
                                            <select class="form-control" id="exampleFormControlSelect1"
                                                name="category_id">
                                                @forelse ($categories as $category)
                                                <option value="{{ $category->id }}" @if($category->id ==
                                                    $product->category_id) selected @endif>{{ $category->name }}
                                                </option>
                                                @empty
                                                <p>Nessuna categoria disponibile</p>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-1">
                                    <label for="name" class="font-weight-bold text-dark">Ingredienti</label>
                                </div>
                                <div class="row">
                                    {{-- <div class="col-md-6 ml-1"> --}}
                                    <div class="form-group ml-3">
                                        {{-- <div class="custom-control custom-checkbox form-check-inline"> --}}

                                        @forelse ($ingredients as $ingredient)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="ingredients_id[]" type="checkbox"
                                                id="inlineCheckbox1" value="{{ $ingredient->id }}"
                                                @if($product->ingredients()->find($ingredient->id)) checked @endif>
                                            <label class="form-check-label"
                                                for="inlineCheckbox1">{{ $ingredient->name }}</label>
                                        </div>
                                        @empty

                                        @endforelse
                                    </div>
                                    {{-- </div> --}}
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