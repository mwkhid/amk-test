@extends('admin.layouts.app-admin')
@section('title', 'Order')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">DAFTAR PEMBELIAN</h5>
                <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm">Tambah Pembelian</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: #d9dddc">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Kode</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Customer</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Subtotal</th>
                                <th class="text-center">Diskon</th>
                                <th class="text-center">Total</th>
                                <th class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="text-center align-middle">{{ $item->code }}</td>
                                    <td class="text-center align-middle">{{ $item->date }}</td>
                                    <td class="align-middle">{{ $item->customers->name ?? '' }}</td>
                                    <td class="align-middle">{{ $item->customers->address ?? '' }}</td>
                                    <td class="text-center align-middle">@currency($item->subtotal)</td>
                                    <td class="text-center align-middle">{{ $item->discount }}</td>
                                    <td class="text-center align-middle">@currency($item->total)</td>
                                    <td class="text-center">

                                        <a href="{{ route('orders.show', $item->id) }}" class="btn btn-info btn-sm"
                                            data-bs-toggle="tooltip" title="Detail">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="{{ route('orders.edit', $item->id) }}" class="btn btn-warning btn-sm"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('orders.destroy', $item->id) }}" class="d-inline"
                                            method="post" data-bs-toggle="tooltip" title="Delete">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">
                                        Data Kosong
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
