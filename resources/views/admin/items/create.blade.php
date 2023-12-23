@extends('admin.layouts.app-admin')
@section('title', 'Buat Item')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">BUAT ITEM BARU</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('items.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" name="name" required value="">
                    </div>
                    <div class="form-group">
                        <label for="price" class="font-weight-bold">Harga</label>
                        <input type="number" class="form-control" name="price" required value="">
                    </div>
                    <div class="form-group">
                        <label for="description" class="font-weight-bold">Deskripsi</label>
                        <input type="text" class="form-control" name="description" required value="">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Buat Item
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
