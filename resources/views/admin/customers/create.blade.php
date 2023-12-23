@extends('admin.layouts.app-admin')
@section('title', 'Buat Customer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">BUAT DATA CUSTOMER BARU</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('customers.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" name="name" required value="">
                    </div>
                    <div class="form-group">
                        <label for="address" class="font-weight-bold">Alamat</label>
                        <input type="text" class="form-control" name="address" required value="">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="font-weight-bold">No. Handphone</label>
                        <input type="text" class="form-control" name="phone" required value="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Buat Data
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
