@extends('layouts.app')

@section('title')
    Edit Alamat
@endsection

@section('content')
    <div class="page-content page-auth mt-5">
      <div class="section-store-auth" data-aos="fade-up">
        <div class="container" style="margin-top: 100px">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h2>
                Sesuaikan Alamat Anda, {{ Auth::user()->name }}
              </h2>
              </div>
          </div>
        </div>
      </div>
    </div>

        <form action="/alamat/{{ $user->id }}" method="POST" enctype="multipart/form-data" id="locations">
            @method('put')
            @csrf
          <div data-aos="fade-up" data-aos-delay="200" id="locations">
                
          <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border border-dark shadow-lg">
                <h5 class="card-header">Edit Alamat</h5>
                <div class="card-body">
                    <div class="row">
                      <div class="col-6 ml-5">
                        <div class="form-group">
                          <label for="address_one">Nama Jalan dan Daerah</label>
                          <input
                            type="text"
                            class="form-control"
                            id="address_one"
                            name="address_one"
                            value="{{ old('address_one', $user->address_one) }}"
                            required/>
                        </div>
                        <div class="form-group">
                        <label for="address_two">Alamat Rumah</label>
                        <input
                          type="text"
                          class="form-control"
                          id="address_two"
                          name="address_two"
                          value="{{ old('address_two', $user->address_two) }}"
                          required/>
                        </div>
                        <div class="form-group">
                        <label for="phone_number">Mobile</label>
                        <input
                          type="text"
                          class="form-control"
                          id="phone_number"
                          name="phone_number"
                          value="{{ old('phone_number', $user->phone_number) }}"
                          required/>
                        </div>
                      </div>
                      <div class="col-4 ml-auto">
                        <div class="form-group">
                          <label for="province">Province</label>
                          <select name="provinces_id"  id="provinces_id" v-if="provinces" v-model="provinces_id" class="form-control" required>
                            <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                          </select>
                          <select v-else class="form-control"></select>
                        </div>
                        <div class="form-group">
                        <label for="regencies_id">City</label>
                        <select name="city_id" id="regencies_id" v-if="regencies" v-model="city_id" class="form-control" required>
                        <option v-for="regencie in regencies" :value="regencie.id">@{{ regencie.name }}</option>
                        </select>
                        <select v-else class="form-control"></select>
                        </div>
                        <div class="form-group">
                        <label for="zip_code">Kode Pos</label>
                        <input
                          type="text"
                          class="form-control"
                          id="zip_code"
                          name="zip_code"
                          value="{{ old('zip_code', $user->zip_code) }}"
                          required/>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
            </div>
          </div>

            <div class="row justify-content-center">
              <div class="col-lg-8">
                <button 
                type="submit" 
                class="btn btn-success btn-block">
                Save
                </button>
              </div>
            </div>
            
        </div>
      </form>
            
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        // console.log('berhasil');
          $('.fk_provinces_id').select2();
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
        //   courier:false,
        //   courier_cost:0,
        //   courier_service:"",
        //   cost:false,
        //   costs:[],
        //   costService:null,
          provinces:null,
          regencies:null,
          provinces_id:null,
          city_id:null,
        //   courier_type:null,
        //   checkout:null,
          }
        },
        methods: {
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

{{-- @if ($user->provinces_id != null)
                        <option value="{{ $user->provinces_id }}" selected>
                            {{ App\Models\Province::find($user->provinces_id)->name }}
                        </option>
                    @else
                    @endif --}}