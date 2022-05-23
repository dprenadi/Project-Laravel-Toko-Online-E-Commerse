@extends('layouts.admin')

@section('title')
  Edit Users
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Edit Users</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->name }}" Users
        </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          {{-- {{ route('category.update', $item->id) }} --}}
          <form action="/admin/user/{{ $item->id }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" name="name" required value="{{ $item->name }}"/>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required value="{{ $item->email }}" />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" />
                      <small>Kosongkan jika tidak ingin mengganti password!</small>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Roles</label>
                      <select name="roles" class="form-control" required>
                        <option value="{{ $item->roles }}" selected>Tidak Diganti</option>
                        <option value="ADMIN">ADMIN</option>
                        <option value="USER">USER</option>
                      </select>
                    </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection