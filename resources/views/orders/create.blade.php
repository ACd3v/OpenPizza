@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Pasti</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf

                        @forelse ($categories as $category)

                        @php
                        // Cerco all'interno della collection contenente tutti i prodotti, quello con l'id della
                        // categoria corrispondente all'id della categoria dentro il forelse attuale e lo trasformo
                        // in array che conterrà solo i nomi dei prodotti
                        $productArray = $products->where('category_id', $category->id)->pluck('name')->toArray();
                        @endphp

                        <div class="form-group">
                            <label class="ml-4" for="name">{{ $category->name }}</label>
                            <select class="col-md-12 selectpicker" multiple>
                                <!-- Stampo per quanti sono i prodotti contenuti in quella categoria il nome dei prodotti -->
                                @for ($i = 0; $i < count($productArray); $i++) <option value="php">{{$productArray[$i]}}
                                    </option>
                                    @endfor
                            </select>
                        </div>
                        @empty

                        @endforelse

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