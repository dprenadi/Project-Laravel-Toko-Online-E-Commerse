@extends('layouts.app')

@section('title')
    Alamat Saya
@endsection

@section('content')
    <div class="page-content page-auth mt-5">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container" style="margin-top: 100px">

          <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
              <h2>
                Pastikan Alamat Anda Sudah Sesuai!
              </h2>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border border-dark shadow-lg">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <h5 class="">Alamat : {{ Auth::user()->name }}</h5>
                    </li>
                    <li class="nav-item ml-auto">
                        <a href="/alamat/{{ $user->name }}/edit" class="btn btn-sm btn-info text-right">Edit</a>
                    </li>
                    </ul>
                </div>
                {{-- <h5 class="card-header">Featured 
                    <a href="#" class="btn btn-sm btn-info">
                    Edit
                    </a>
                </h5> --}}
                {{-- @if ($user =! null)     --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-6 ml-5">
                            <h5 class="card-title">Nama Jalan dan Daerah</h5>
                        <p class="card-text">{{ $user->address_one ?? null}}</p>
                        <h5 class="card-title">Alamat Rumah</h5>
                        <p class="card-text">{{ $user->address_two ?? null}}</p>
                        <h5 class="card-title">Nomor HP</h5>
                        <p class="card-text">{{ $user->phone_number ?? null}}</p>
                        </div>
                        <div class="col-4 ml-auto">
                        <h5 class="card-title">Provinsi</h5>
                        <p class="card-text">
                            {{ App\Models\Province::find($user->provinces_id)->name ?? null}}
                        </p>
                        <h5 class="card-title">Kota/Kabupaten</h5>
                        <p class="card-text">
                            {{ App\Models\City::find($user->city_id)->name ?? null}}
                        </p>
                        <h5 class="card-title">Kode Pos</h5>
                        <p class="card-text">{{ $user->zip_code ?? null}}</p>
                        </div>
                    </div>
                </div>
                {{-- @else
                <div class="card-body">
                    <div class="row">
                        <h5>Edit Untuk Mengisi Alamat</h5>
                    </div>
                </div>
                @endif --}}

                </div>
            </div>
        </div>

      </div>
    </div>
@endsection