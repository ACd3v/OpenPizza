@extends('layouts.app_admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more
        information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
            DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="ml-2 m-0 font-weight-bold text-primary">Ordini <span
                    class="badge badge-primary">{{ $orders->count() }}</span></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cliente</th>
                            <th>Data</th>
                            <th></th>
                            {{-- <th>Start date</th>
                            <th>Salary</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>
                                {{ $users->find($order->user_id)->name }}
                                {{ $users->find($order->user_id)->surname }}
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
                            </td>
                            {{-- <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td> --}}
                        </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection