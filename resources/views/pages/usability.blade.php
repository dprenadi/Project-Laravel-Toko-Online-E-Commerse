@extends('layouts.app')

@section('title')
    Usability Testing
@endsection

@section('content')

    <div class="page-content page-home">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    @can('admin')
                    <a href="/usability/admin" class="btn btn-sm btn-info">Table Hasil Testing</a>
                    @endcan
                    <h3>Usability Testing</h3>
                    <p>Survei ini digunakan untuk mengetahui seberapa Efektif, Efisien, dan Kepuasan User dalam menggunakan Aplikasi</p>
                </div>
                <form action="/usability" method="post">
                @csrf
                <div class="col-md-10">

                    {{-- q1 --}}
                    <div class="bg-secondary text-white">
                        <h4 class="text-center">Efektifitas</h4>
                    </div>
                    <div class="mt-2 mb-3">
                    <h5>1. Apakah halaman registrasi mudah dipahami bagi anda?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="q1" value="1">
                        <label class="form-check-label" for="q1">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q1" id="q1" value="0">
                        <label class="form-check-label" for="">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q2 --}}
                    <div class="mt-2 mb-3">
                    <h5>2. Apakah tulisan atau teks yang digunankan mudah bagi anda?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="q2" value="1">
                        <label class="form-check-label" for="q2">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q2" id="q2" value="0">
                        <label class="form-check-label" for="q2">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q3 --}}
                    <div class="mt-2 mb-3">
                    <h5>3. Apakah tombol-tombol navigasi mudah dipahami bagi anda ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="q3" value="1">
                        <label class="form-check-label" for="q3">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q3" id="q3" value="0">
                        <label class="form-check-label" for="q3">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q4 --}}
                    <div class="mt-2 mb-3">
                    <h5>4. Apakah menu-menu yang tersedia mudah dipahami bagi anda ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="q4" value="1">
                        <label class="form-check-label" for="q4">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q4" id="q4" value="0">
                        <label class="form-check-label" for="q4">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    <div class="bg-secondary text-white">
                        <h4 class="text-center">Efesiensi</h4>
                    </div>
                    {{-- q5 --}}
                    <div class="mt-2 mb-3">
                    <h5>1. Apakah menu-menu yang anda klik dapat menampilkan dengan cepat ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="q5" value="1">
                        <label class="form-check-label" for="q5">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q5" id="q5" value="0">
                        <label class="form-check-label" for="q5">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q6 --}}
                    <div class="mt-2 mb-3">
                    <h5>2. Apakah saat diketikan pada mesin pencarian judul langsung ditampilkan ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="q6" value="1">
                        <label class="form-check-label" for="q6">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q6" id="q6" value="0">
                        <label class="form-check-label" for="q6">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q7 --}}
                    <div class="mt-2 mb-3">
                    <h5>3. Apakah tampilan pada halaman-halaman sudah responsif dan cepat ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="q7" value="1">
                        <label class="form-check-label" for="q7">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q7" id="q7" value="0">
                        <label class="form-check-label" for="q7">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    <div class="bg-secondary text-white">
                        <h4 class="text-center">Kepuasan</h4>
                    </div>
                    {{-- q8 --}}
                    <div class="mt-2 mb-3">
                    <h5>1. Apakah anda ingin mengunjungi situs ini kembali ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="q8" value="1">
                        <label class="form-check-label" for="q8">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q8" id="q8" value="0">
                        <label class="form-check-label" for="q8">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q9 --}}
                    <div class="mt-2 mb-3">
                    <h5>2. Apakah anda puas dengan informasi yang disajikan oleh situs ini ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="q9" value="1">
                        <label class="form-check-label" for="q9">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q9" id="q9" value="0">
                        <label class="form-check-label" for="q9">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    {{-- q10 --}}
                    <div class="mt-2 mb-3">
                    <h5>3. Apakah anda puas dengan kemudahan yang ditawarkan oleh situs ini ?</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q10" id="q10" value="1">
                        <label class="form-check-label" for="q10">
                            Ditemukan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="q10" id="q10" value="0">
                        <label class="form-check-label" for="q10">
                            Tidak ditemukan
                        </label>
                    </div>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection