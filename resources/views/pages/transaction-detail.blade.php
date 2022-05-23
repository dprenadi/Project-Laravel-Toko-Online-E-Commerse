@extends('layouts.app')

@section('title')
    Store Cart
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-cart">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/">Home</a>
                  </li>
                  <li class="breadcrumb-item">
                    <a href="/transaction">Recent Transaction</a>
                  </li>
                  <li class="breadcrumb-item active">
                    Detail Transaction
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container">
    <div class="dashboard-heading">
      {{-- <h2 class="dashboard-title">#{{ $transaction->code }}</h2> --}}
      <p class="dashboard-subtitle">
        Transactions Details
      </p>
    </div>
    <div class="dashboard-content" id="transactionDetails">
      {{-- @php
          $total0 = $transaction[0]->product->price * $transaction[0]->qty
      @endphp
      @php
          $total1 = $transaction[1]->product->price * $transaction[1]->qty
      @endphp
      @php
          $ongkir = $transaction[0]->transaction->total_price - ($total0 + $total1)
      @endphp --}}
      {{-- Card --}}
      {{-- @foreach ($transaction as $item) --}}
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img
                    src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                    class="w-100 mb-3"
                    alt=""
                  />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row ml-5">
                    {{-- <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">Nama Pembeli</div>
                      <div class="product-subtitle">{{ $transaction->transaction->user->name }}</div>
                    </div> --}}
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">Nama Produk</div>
                      <div class="product-subtitle">
                        {{ $transaction->product->name }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">
                        Jumlah Produk
                      </div>
                      <div class="product-subtitle">
                        {{ $transaction->qty }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">Statu Pembayaran</div>
                      <div class="product-subtitle text-danger">
                        {{ $transaction->transaction->transaction_status }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">
                        Harga Produk <small>(satuan)</small>
                      </div>
                      <div class="product-subtitle">
                        Rp. {{ number_format($transaction->product->price) }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">
                        Tanggal Transaksi
                      </div>
                      <div class="product-subtitle">
                        {{ $transaction->created_at->format('Y-m-d') }}
                      </div>
                    </div>
                    {{-- <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">
                        Biaya Ongkir
                      </div>
                      <div class="product-subtitle">
                        Rp. {{ number_format($transaction->transaction->total_price -($transaction->product->price * $transaction->qty)) }}
                      </div>
                    </div> --}}
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">
                        Total Harga
                      </div>
                      <div class="product-subtitle">
                        Rp. {{ number_format($transaction->product->price * $transaction->qty) }}
                      </div>
                    </div>
                    <div class="col-12 col-md-6 mb-2">
                      <div class="product-title">
                        Nomor HP
                      </div>
                      <div class="product-subtitle">
                        {{ $transaction->transaction->user->phone_number }}
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              {{-- {{ route('dashboard-transaction-update', $transaction->id) }} --}}
              <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-12 mt-4">
                    <h5>Informasi Pengiriman</h5>
                  </div>
                  <div class="col-12">
                    <div class="row">
                      <div class="col-12 col-md-6 mb-2">
                        <div class="product-title">Nama Jalan dan Daerah</div>
                        <div class="product-subtitle">
                          {{ $transaction->transaction->user->address_one }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <div class="product-title">Provinsi</div>
                        <div class="product-subtitle">
                          {{ App\Models\Province::find($transaction->transaction->user->provinces_id)->name ?? null}}
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <div class="product-title">Alamat Rumah</div>
                        <div class="product-subtitle">
                          {{ $transaction->transaction->user->address_two }}
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <div class="product-title">Kota/Kabupaten</div>
                        <div class="product-subtitle">
                          {{ App\Models\City::find($transaction->transaction->user->city_id)->name ?? null}}
                        </div>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <div class="product-title"></div>
                        <div class="product-subtitle"></div>
                      </div>
                      <div class="col-12 col-md-6 mb-2">
                        <div class="product-title">Kode POS</div>
                        <div class="product-subtitle">{{ $transaction->transaction->user->zip_code }}</div>
                      </div>
                      @if (Auth::user() && Auth::user()->roles == 'ADMIN')
                        <div class="col-12 col-md-3">
                        <div class="product-title mb-1">Shipping Status</div>
                        <select
                          name="shipping_status"
                          id="status"
                          class="form-control"
                          v-model="status">
                          <option value="PENDING">Pending</option>
                          <option value="SHIPPING">Shipping</option>
                          <option value="SUCCESS">Success</option>
                        </select>
                      </div>
                      <template v-if="status == 'SHIPPING'">
                        <div class="col-md-3">
                          <div class="product-title">Input Resi</div>
                          <input
                            type="text"
                            class="form-control"
                            name="resi"
                            v-model="resi"/>
                        </div>
                        <div class="col-md-2">
                          <button
                            type="submit"
                            class="btn btn-success btn-block mt-4">
                            Update Resi
                          </button>
                        </div>
                         {{-- <div class="row mt-4"> --}}
                        {{-- <div class="col-12 text-right">
                          <button
                            type="submit"
                            class="btn btn-success btn-lg mt-4">
                            Save Now
                          </button>
                        </div> --}}
                      {{-- </div> --}}
                      @else
                        <div class="col-12 col-md-3">
                        <div class="product-title">Shipping Status</div>
                        <div class="product-subtitle">
                            {{ $transaction->shipping_status }}
                        </div>
                        </div>
                      @endif
                      </template>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 text-right">
                    <button
                      type="submit"
                      class="btn btn-success btn-lg mt-4">
                      Save Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      {{-- @endforeach --}}
      {{-- End Card --}}

    </div>
  </div>
</div>

</div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "{{ $transaction->shipping_status }}",
        resi: "{{ $transaction->resi }}",
      },
    });
  </script>
@endpush