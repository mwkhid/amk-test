@extends('admin.layouts.app-admin')
@section('title', 'Edit Customer')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">EDIT DATA CUSTOMER</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('customers.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" name="name" required value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="font-weight-bold">Alamat</label>
                        <input type="text" class="form-control" name="address" required value="{{ $item->address }}">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="font-weight-bold">No. Handphone</label>
                        <input type="text" class="form-control" name="phone" required value="{{ $item->phone }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Update Data
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
