@extends('layouts.app_admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Elenco delle Categorie</h1>
    <p class="mb-4">Di seguito puoi trovare l'elenco con tutte le categorie.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="ml-2 m-0 font-weight-bold text-primary">Categorie <span
                    class="badge badge-primary">{{ $categories->count() }}</span>

                <a href="{{ route('create.category') }}" class="btn btn-primary btn-circle btn-sm float-right">
                    <i class="fas fa-plus"></i>
                </a>
            </h5>
        </div>
        <div class="card-body">
            @if ($categories->count() != 0)
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
                        @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td>{{ $category->created_at }}</td>
                            <td style="text-align: right;">
                                <a href="{{ route('show.category', $category->id) }}"
                                    class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-60">
                                        <i class="fas fa-search-plus"></i>
                                    </span>
                                    <span class="text">Vedi</span>
                                </a>
                            </td>
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