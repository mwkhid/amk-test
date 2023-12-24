@extends('admin.layouts.app-admin')
@section('title', 'Edit User')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 border-bottom-primary d-flex justify-content-between">
                <h5 class="m-0 mt-1 font-weight-bold text-primary">EDIT DATA USER</h5>
            </div>
            <div class="card-body">

                <form action="{{ route('user-management.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="font-weight-bold">Nama</label>
                        <input type="text" class="form-control" name="name" required value="{{ $item->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">Email</label>
                        <input type="text" class="form-control" name="email" required value="{{ $item->email }}">
                    </div>
                    <div class="form-group">
                        <label for="roles" class="font-weight-bold">Role</label>
                        <select name="roles" id="roles" class="form-control">
                            <option value="ADMIN" {{ 'ADMIN' == $item->roles ? 'selected' : '' }}>ADMIN</option>
                            <option value="STAFF" {{ 'STAFF' == $item->roles ? 'selected' : '' }}>STAFF</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">
                        Update User
                    </button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
