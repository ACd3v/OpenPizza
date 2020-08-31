@extends('layouts.app_admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Elenco degli Ordini</h1>
    <p class="mb-4">Di seguito puoi trovare l'elenco con tutti gli ordini.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h5 class="ml-2 m-0 font-weight-bold text-primary">Ordini <span
                    class="badge badge-primary">{{ $orders->count() }}</span></h5>
        </div>
        <div class="card-body">
            @if ($orders->count() != 0)
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>
                                {{ $order->user->name }}
                                {{ $order->user->surname }}
                            </td>
                            <td>{{ $order->created_at }}</td>
                            <td style="text-align: right;">
                                <a href="{{ route('show.order', $order->id) }}"
                                    class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-60">
                                        <i class="fas fa-search-plus"></i>
                                    </span>
                                    <span class="text">Vedi</span>
                                </a>
                                <a class="btn btn-danger btn-icon-split btn-sm"
                                    href="{{ route('delete.order', $order->id) }}"
                                    onclick="event.preventDefault();
                                                                                                    document.getElementById('delete-form-{{ $order->id }}').submit();">
                                    <span class="icon text-white-60">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                    <span class="text">Elimina</span>
                                </a>

                                <form id="delete-form-{{ $order->id }}" action="{{ route('delete.order', $order->id) }}"
                                    method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                        @empty
                        <p>Nessn elemento disponibile</p>
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