@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')

<!-- Page Content -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    {{ $product->name }}
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            {{-- @if ($product->galleries()->where('photos')->count()) --}}
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                {{-- @if($product->galleries->count())
                  <img
                  src="{{ Storage::url($product->galleries->first()->photos) }}"
                  alt=""
                  class="w-50 main-image"/>
                  @else
                  <img src="/images/no-img.png" alt="" class="w-50 main-image">
                @endif --}}
                <img
                  :key="photos[activePhoto].id"
                  :src="photos[activePhoto].url"
                  class="w-50 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                {{-- @foreach ($product->galleries as $gallery)     --}}
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100">
                  <a href="#" @click="changeActive(index)">
                  {{-- @if($gallery->photos)
                    <img
                    src="{{ Storage::url($gallery->photos) }}"
                    alt=""
                    class="w-75 thumbnail-image"/>
                    @else
                    <img src="/images/no-img.png" alt="" class="w-75 thumbnail-image">
                  @endif --}}
                    <img
                      :src="photo.url"
                      :class="{ active: index == activePhoto }"
                      class="w-50 thumbnail-image"
                      alt=""
                    />
                  </a>
                </div>
                {{-- @endforeach --}}
              </div>
            </div>
          {{-- @endif --}}
          </div>
        </div>
      </section>
      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>{{ $product->name }}</h1>
                {{-- <div class="owner">By Galih Pratama</div> --}}
                <div class="price">Rp. {{ number_format($product->price) }}</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                @auth 
                {{-- /details/{id}/{{ $product->id }} --}}
                <form action="{{ route('detail-add', $product->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <label>Jumlah</label>
                  <input id="qty" type="number" class="form-control mb-2" name="qty" min="1" value="1" required>
                  <button
                    type="submit"
                    class="btn btn-success nav-link px-4 text-white btn-block mb-3">
                    Add to Cart
                  </button>
                </form>   
                @else
                <a
                  class="btn btn-success nav-link px-4 text-white btn-block mb-3"
                  href="/login">
                  Login to Add to Cart
                </a>
                @endauth
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                {!! $product->description !!}
              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-5 mb-3">
                @if($comment->count() > 0)
                <h5>Customer Reviews ({{ $comment->count() }})</h5>
                @else
                <h5>Customer Review (0)</h5>
                @endif
                {{-- <h5>Customer Review (0)</h5> --}}
              </div>
            </div>
            @auth
              <div class="col-12 col-lg-8 media-body mb-4">
                <form action="/comment" method="POST">
                  @csrf
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <textarea name="comment" placeholder="Masukan Pesan" class="form-control"></textarea>
                  <button type="submit" class="btn btn-success mt-2"> Send</button>
                </form>
              </div>
            @endauth
            <div class="row">
              <div class="col-12 col-lg-8">
                @foreach ($comment as $comment)    
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="{{ 'https://ui-avatars.com/api/?name=' . $comment->user->name }}"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">By : {{ $comment->user->name }}</h5>
                      <hr class="dropdown-divider">
                      {{ $comment->comment }}
                    </div>
                  </li>
                </ul>
                @endforeach
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>

@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            @foreach ($product->galleries as $gallery)
            {
              id: {{ $gallery->id }},
              url: "{{ Storage::url($gallery->photos) }}",
            },
            @endforeach
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush