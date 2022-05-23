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
                    Cart
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-cart">
        <div class="container">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-12 table-responsive">
              <table class="table table-borderless table-cart">
                <thead>
                  <tr>
                    <td>Image</td>
                    <td>Name</td>
                    <td>Jumlah</td>
                    {{-- <td>Name &amp; Seller</td> --}}
                    <td>Price</td>
                    <td>Menu</td>
                  </tr>
                </thead>
                <tbody>
                  @php $totalPrice = 0 @endphp
                  @php $total_qty = 0 @endphp
                  @forelse ($carts as $cart)
                  {{-- @foreach ($carts as $cart) --}}
                    <tr>
                      <td style="width: 20%;">
                        @if($cart->product->galleries->count())
                          <img
                            src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                            alt=""
                            class="cart-image"/>
                        @else
                          <img src="/images/no-img.png" alt="" class="cart-image">
                        @endif
                      </td>
                      <td style="width: 35%;">
                        <div class="product-title">{{ $cart->product->name }}</div>
                      </td>
                      <td style="width: 15%;">
                        <div class="product-title">{{ $cart->qty }}</div>
                      </td>
                      <td style="width: 20%;">
                        <div class="product-title">Rp. {{ number_format($cart->product->price * $cart->qty) }}</div>
                        <div class="product-subtitle">IDR</div>
                      </td>
                      <td style="width: 20%;">
                        <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-remove-cart" type="submit">
                            Remove
                          </button>
                        </form>
                      </td>
                    </tr>
                    {{-- @php $net_price = $cart->product->price * $cart->qty @endphp --}}
                    @php $totalPrice += $cart->product->price * $cart->qty @endphp
                    @php $total_qty += $cart->qty @endphp
                    @empty
                    <tr class="text-center">
                      <td colspan="4">Tidak ada cart</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="150">
            <div class="col-12">
              <hr />
            </div>
            <div class="col-12">
              <h2 class="mb-4">Shipping Details</h2>
            </div>
          </div>
          {{-- {{ route('checkout') }} --}}
          <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data" id="locations">
            @csrf
            <input type="hidden" id="totalPrice" name="total_price" value="{{ $totalPrice }}">
            <input type="hidden" id="totalPay" name="total_pay" value="{{ $totalPrice }}">
            {{-- <input type="hidden"  name="net_price" value="{{ $net_price }}"> --}}
            <input type="hidden"  name="total_qty" value="{{ $total_qty }}">

            <div class="row mb-2" data-aos="fade-up" data-aos-delay="200" id="locations">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address_one">Nama Jalan dan Daerah</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address_one"
                    name="address_one"
                    value="{{ old('address_one', $user->address_one) }}"
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="address_two">Alamat Rumah</label>
                  <input
                    type="text"
                    class="form-control"
                    id="address_two"
                    name="address_two"
                    value="{{ old('address_two', $user->address_two) }}"
                  />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="zip_code">Kode Pos</label>
                  <input
                    type="text"
                    class="form-control"
                    id="zip_code"
                    name="zip_code"
                    value="{{ old('zip_code', $user->zip_code) }}"
                  />
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone_number">Nomor HP</label>
                  <input
                    type="text"
                    class="form-control"
                    id="phone_number"
                    name="phone_number"
                    value="{{ old('phone_number', $user->phone_number) }}"
                  />
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="province">Provinsi</label>
                  <select name="provinces_id"  id="provinces_id" v-if="provinces" v-model="provinces_id" class="form-control">
                  <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                  </select>
                  <select v-else class="form-control"></select>
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="regencies_id">Kota</label>
                 <select name="city_id" @change="GetCourier()"  id="regencies_id" v-if="regencies" v-model="city_id" class="form-control">
                  <option v-for="regencie in regencies" :value="regencie.id">@{{ regencie.name }}</option>
                  </select>
                  <select v-else class="form-control"></select>
                </div>
              </div>

            </div>

            {{-- Kurir --}}
            <div class="row">
            <div class="col-md-4" >
              <div class="form-group" v-if="courier">
                  <label >KURIR PENGIRIMAN</label>
                  
                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input select-courier"
                      type="radio"
                      name="courier"
                      id="ongkos_kirim-jne"
                      value="jne"
                      v-model="courier_type"
                      @change="getOngkir()"
                    />
                    <label
                      class="form-check-label font-weight-bold mr-4"
                      for="ongkos_kirim-jne"
                    >
                      JNE</label
                    >
                    <input
                      class="form-check-input select-courier"
                      type="radio"
                      name="courier"
                      id="ongkos_kirim-tiki"
                      value="tiki"
                      v-model="courier_type"
                      @change="getOngkir()"
                    />
                    <label
                      class="form-check-label font-weight-bold mr-4"
                      for="ongkos_kirim-jnt"
                      >TIKI</label
                    >
                    <input
                      class="form-check-input select-courier"
                      type="radio"
                      name="courier"
                      id="ongkos_kirim-pos"
                      value="pos"
                      v-model="courier_type"
                      @change="getOngkir()"
                    />
                    <label
                      class="form-check-label font-weight-bold"
                      for="ongkos_kirim-jnt"
                      >POS</label
                    >
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="form-group" v-if="cost" >
                  
                  <label class="font-weight-bold">SERVICE KURIR</label>
                  <br />
                <div
                    v-for="value in costs"
                    :key="value.service"
                    class="form-check form-check-inline"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      name="cost"
                      :id="value.service"
                      :value="value.cost[0].value + '|' + value.service"
                      v-model="costService"
                      @change="getCostService()"
                    />
                    {{-- <input type="hidden"  name="ongkir" :value="cost[0]"> --}}
                    <label
                      class="form-check-label font-weight-normal mr-5"
                      :for="value.service"
                    >
                      @{{ value.service }} - Rp.
                      @{{ value.cost[0].value }}</label
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="150">
              <div class="col-12">
                <hr />
              </div>
              <div class="col-12">
                <h2 class="mb-1">Informasi Pembayaran</h2>
              </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="200">
              <div class="col-4 col-md-2">
                <div class="product-title">$0</div>
                <div class="product-subtitle">Country Tax</div>
              </div>
              <div class="col-4 col-md-3">
                <div class="product-title">$0</div>
                <div class="product-subtitle">Product Insurance</div>
              </div>
              {{-- <div class="col-4 col-md-2">
                <div class="product-title">$0</div>
                <div class="product-subtitle">Ongkir</div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title text-success">Rp. {{ number_format($totalPrice ?? 0) }}</div>
                <div class="product-subtitle">Total</div>
              </div> --}}
              <div class="col-4 col-md-2">
                <div class="product-title" id="courier_cost">$0</div>
                <div class="product-subtitle">Ship to <p id="tujuan"></p></div>
              </div>
              <div class="col-4 col-md-2">
                <div class="product-title text-success" id="totalPembayaran">Rp. {{ number_format($totalPrice ?? 0) }}</div>
                <div class="product-subtitle">Total</div>
              </div>
              {{-- <div class="col-8 col-md-3">
                <button
                  type="submit"
                  class="btn btn-success mt-4 px-4 btn-block">
                  Checkout Now
                </button>
              </div> --}}
              <div class="col-8 col-md-3" v-if="checkout">
                <button
                type="submit"
                class="btn btn-success mt-4 px-4 btn-block">
                  Checkout Now
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    {{-- <script src="https://unpkg.com/vue-toasted"></script> --}}
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    {{-- <script>
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
    </script> --}}

    <script>
    $(document).ready(function() {
        // console.log('berhasil');
          $('.provinces_id').select2();
      });
    </script>
    <script>
      var locations = new Vue({
        el: "#locations",
        mounted() {
          AOS.init();
          this.getProvincesData()
        },
        data(){
          return{
          courier:false,
          courier_cost:0,
          courier_service:"",
          cost:false,
          costs:[],
          costService:null,
          provinces:null,
          regencies:null,
          provinces_id:null,
          city_id:null,
          courier_type:null,
          checkout:null,
          }
        },
        methods: {
          GetCourier(){
            var self = this;
            self.courier = true;
             axios.get('{{ url('api/city_id') }}/' + self.city_id)
                    .then(function(response){
                    self.city = response.data.name;
                    document.getElementById("tujuan").innerHTML  = response.data.name;
              });
            // console.log(self.city_id)
          },
          getOngkir(){
            var self = this;
             axios.post("{{ route('api-checkOngkir') }}", {
                city_destination: self.city_id, // <-- ID kota
                courier: self.courier_type, // jenis kurir
              })
                .then((response) => {
                 
                  // set state cost menjadi true, untuk menampilkan pilihan cost pengiriman
                  self.cost = true;
                  //assign state costs dengan hasil response
                  self.costs = response.data.data[0].costs;
                })
                .catch((error) => {
                  console.log(error);
                });
           
          },
          getCostService(){
            var self = this;
            let shipping = self.costService.split("|");
            self.checkout = true;
            
            self.courier_cost = shipping[0];
            self.courier_service = shipping[1];
            let total = document.getElementById('totalPay').value;
            // console.log(total)
            console.log(self.courier_cost)
            let formatCost = new Intl.NumberFormat('id-ID', { maximumSignificantDigits: 5 }).format(self.courier_cost);
            document.getElementById('courier_cost').innerHTML = `Rp ${formatCost}`;
            let totalPayment = parseInt(total) + parseInt(self.courier_cost);
            let formatPayment = new Intl.NumberFormat('id-ID', { maximumSignificantDigits: 6 }).format(totalPayment);
            console.log("total " + totalPayment);
            document.getElementById('totalPembayaran').innerHTML = `Rp ${formatPayment}`;
            
            document.getElementById('totalPrice').value = totalPayment;
          },
          getProvincesData(){
            var self = this;
            axios.get('{{ route('api-provinces') }}')
                .then(function(response){
                  self.provinces = response.data;
                  
                });
            },
            getRegenciesData(){
                var self = this;
                
                axios.get('{{ url('api/city') }}/' + self.provinces_id)
                    .then(function(response){
                      console.log(response.data)
                    self.regencies = response.data;
                     
              });
            }
        },
        watch: {
          provinces_id: function(val, oldVal){
            this.regencies_id=null;
            this.getRegenciesData();
          }
        },
      });
    </script>
@endpush