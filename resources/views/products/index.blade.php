@extends('layouts.app_admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Elenco dei Prodotti</h1>
    <p class="mb-4">Di seguito puoi trovare l'elenco con tutti i prodotti.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="ml-2 m-0 font-weight-bold text-primary">Prodotti <span
                    class="badge badge-primary">{{ $products->count() }}</span>

                <a href=" {{ route('create.product') }} " class="btn btn-primary btn-circle btn-sm float-right">
                    <i class="fas fa-plus"></i>
                </a>
            </h5>


        </div>
        <div class="card-body">
            @if ($products->count() != 0)
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Aggiunto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td>{{ $product->created_at }}</td>
                        </tr>
                        @empty
                        <p>Nessun elemento disponibile</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @else
            <p>Nessun elemento disponibile</p>
            @endif
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection

@section('scripts')
<script type="text/javascript">
    $('select').selectpicker();
</script>
@endsection