@extends('admin.layouts.app-admin')
@section('title', 'Buat Order')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">BUAT DATA PEMBELIAN</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('orders.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="code" class="font-weight-bold">Kode</label>
                        <input type="text" class="form-control" name="code" required value="">
                    </div>
                    <div class="form-group">
                        <label for="date" class="font-weight-bold">Tanggal</label>
                        <input type="date" class="form-control" name="date" required value="">
                    </div>
                    <div class="form-group">
                        <label for="customer_id">Customer</label>
                        <select name="customer_id" required class="form-control">
                            <option value="" disabled selected>-- Pilih Customer --</option>
                            @foreach ($customers as $customer)
                                <option value="{{ $customer->id }}">
                                    {{ $customer->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="item_id">Item</label>
                        <select name="item_id" required class="form-control">
                            <option value="" disabled selected>-- Pilih Item --</option>
                            @foreach ($items as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }} - {{ $item->price }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qty" class="font-weight-bold">Jumlah</label>
                        <input type="number" class="form-control" name="qty" required value="">
                    </div>
                    <div class="form-group">
                        <label for="discount" class="font-weight-bold">Diskon (%)</label>
                        <input type="number" class="form-control" name="discount" required value="">
                    </div>
                    <div class="form-group">
                        <label for="note" class="font-weight-bold">Catatan</label>
                        <input type="text" class="form-control" name="note" required value="">
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
