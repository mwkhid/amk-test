@extends('admin.layouts.app-admin')
@section('title', 'Detail Order')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">DETAIL PEMBELIAN</h5>
                <a href="{{ route('orders.create') }}" class="btn btn-primary btn-sm">Tambah Pembelian</a>

            </div>
            <div class="row">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">

                            <tr>
                                <th>Kode</th>
                                <td>{{ $item->orders->code }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal</th>
                                <td>{{ $item->orders->date }}</td>
                            </tr>
                            <tr>
                                <th>Customer</th>
                                <td>{{ $item->orders->customers->name ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $item->orders->customers->address ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Item</th>
                                <td>{{ $item->items->name ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>@currency($item->items->price ?? null) </td>
                            </tr>
                            <tr>
                                <th>Julmah</th>
                                <td>{{ $item->qty }}</td>
                            </tr>

                            <tr>
                                <th>Subtotal</th>
                                <td>@currency($item->orders->subtotal)</td>
                            </tr>
                            <tr>
                                <th>Diskon</th>
                                <td>{{ $item->orders->discount }} %</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>@currency($item->orders->total)</td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td>{{ $item->note }}</td>
                            </tr>
                            <tr>
                                <th>
                                    <a href="{{ route('orders.edit', $item->id) }}" class="btn btn-warning btn-sm"
                                        data-bs-toggle="tooltip" title="Edit">
                                        <i class="fa fa-pencil-alt"> Edit</i>
                                    </a>
                                    <form action="{{ route('orders.destroy', $item->id) }}" class="d-inline" method="post"
                                        data-bs-toggle="tooltip" title="Delete">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"> Hapus</i>
                                        </button>
                                    </form>
                                </th>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
