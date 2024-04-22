@extends('layout.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-900">User</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{route('user-create')}}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah User</a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th></th>
                    <td></td>
                    <td></td>
                    <td><a href="{{route('user-edit')}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                        <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection