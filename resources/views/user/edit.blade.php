@extends('layout.main')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h4 mb-0 text-gray-900">Edit User</h1>
  </div>

  <div class="container-fluid">
      <form action="{{ route('user-update', $users->id) }}" method="POST">
        @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$users->name}}">
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" value="{{$users->email}}">
            </div>
          <div class="mb-3">
          <label for="role" class="form-label">Role</label>
          <select class="form-select" name="role" id="role">
              <option selected disabled>Pilih Role</option>
              <option value="admin">Admin</option>
              <option value="petugas">Petugas</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
@endsection