@extends('admin.layouts.app-admin')
@section('title', 'Customer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">DAFTAR CUSTOMER</h5>
                <a href="{{ route('customers.create') }}" class="btn btn-primary btn-sm">Tambah Customer</a>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead style="background-color: #d9dddc">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">No. Handphone</th>
                                <th class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $item->name }}</td>
                                    <td class="align-middle">{{ $item->address }}</td>
                                    <td class="text-center align-middle">{{ $item->phone }}</td>
                                    <td class="text-center">

                                        <a href="{{ route('customers.edit', $item->id) }}" class="btn btn-warning btn-sm"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('customers.destroy', $item->id) }}" class="d-inline"
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
                                    <td colspan="7" class="text-center">
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
