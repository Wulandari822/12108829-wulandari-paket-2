@extends('layout.main')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-900">User</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
          <!-- Start kode untuk form pencarian -->
<form class="form" method="get" action="{{ route('search-user') }}">
    <div class="form-group w-100 mb-3">
        <label for="search" class="d-block mr-2">Pencarian</label>
        <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
        <button type="submit" class="btn btn-primary mb-1">Cari</button>
    </div>

            <a href="{{  route('user-create')  }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah User</a>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><a href="{{  route('user-edit', $user->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                        <a href="{{  route('user-delete', $user->id) }}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                      
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
</form>
@endsection