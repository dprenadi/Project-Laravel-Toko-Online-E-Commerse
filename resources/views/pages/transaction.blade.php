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
                  <li class="breadcrumb-item active">
                    Recent Transaction
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
            <div class="row ml-1" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-1">
                 Photo
                </div>
                <div class="col-md-3">
                 Name
                </div>
                <div class="col-md-1">
                 Jumlah
                </div>
                <div class="col-md-3 text-center">
                 Price
                </div>
                <div class="col-md-4">
                 Date
                </div>
            </div>
                @foreach ($buyTransactions as $transaction)
                 <a
                    href="/transaction/{{ $transaction->id }}"
                    class="card card-list d-block">
                    <div class="card-body">
                      <div class="row" data-aos="fade-up" data-aos-delay="200">
                        <div class="col-md-1">
                          <img
                            src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                            class="w-50"
                          />
                        </div>
                        <div class="col-md-3">
                          {{ $transaction->product->name }}
                        </div>
                        <div class="col-md-1 text-center">
                          {{ $transaction->qty}}
                        </div>
                        <div class="col-md-3 text-center">
                          Rp. {{number_format($transaction->product->price * $transaction->qty) }}
                        </div>
                        <div class="col-md-3">
                          {{ $transaction->created_at->format('Y-m-d') }}
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                  </a>
                  @endforeach
          
            
        <div class="row mt-5">
            <div class="col-md">
                {{ $buyTransactions->links() }}
            </div>
        </div>
        
        
        </div>
      </section>
    </div>
@endsection

{{-- @push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          AOS.init();
          this.getProvincesData();
        },
        data: {
          provinces: null,
          regencies: null,
          provinces_id: null,
          regencies_id: null,
        },
        methods: {
          getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
              .then(function (response) {
                  self.provinces = response.data;
              })
          },
          getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
              .then(function (response) {
                  self.regencies = response.data;
              })
          },
        },
        watch: {
          provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
          },
        }
      });
    </script>
@endpush --}}