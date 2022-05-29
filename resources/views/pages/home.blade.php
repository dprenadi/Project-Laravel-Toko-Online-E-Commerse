@extends('layouts.app')

@section('title')
Store Homepage
@endsection

@section('content')
<div class="page-content page-home">
      {{-- <section class="store-carousel">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10" data-aos="zoom-in">
              <div
                id="storeCarousel"
                class="carousel slide"
                data-ride="carousel">
                <ol class="carousel-indicators">
                  <li
                    data-target="#storeCarousel"
                    data-slide-to="0"
                    class="active"></li>
                  <li data-target="#storeCarousel" data-slide-to="1"></li>
                  <li data-target="#storeCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="/images/1.png"
                      class="d-block"
                      style="height:50px"
                      alt="Carousel Image"/>
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"/>
                  </div>
                  <div class="carousel-item">
                    <img
                      src="/images/banner.jpg"
                      class="d-block w-100"
                      alt="Carousel Image"/>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      <div class="row justify-content-center mb-3 mt-5">
        <div class="col-md-8">
            <form action="/">
            {{-- @if (request('product'))
                <input type="hidden" name="product" value="{{ request('product') }}">
            @endif --}}
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </div>
            </form>
        </div>
      </div>

      {{-- <section class="store-trend-categories">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Trend Categories</h5>
            </div>
          </div>
          <div class="row">
            @php
                $incrementCategory = 0
            @endphp
            @forelse ($categories as $category)
                <div
                  class="col-6 col-md-3 col-lg-2"
                  data-aos="fade-up"
                  data-aos-delay="{{ $incrementCategory+= 100 }}">
                  <a href="/categories/{{ $category->slug }}" class="component-categories d-block">
                    <div class="categories-image">
                      <img
                        src="{{ Storage::url
                        ($category->photo) }}"
                        alt="Gadgets Categories"
                        class="w-100"/>
                    </div>
                    <p class="categories-text" >
                      {{ $category->name }}
                    </p>
                  </a>
                </div>
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up"
                  data-aos-delay="100">
                  No Categories Found
                </div>
            @endforelse
          </div>
        </div>

      </section> --}}
      

      <section class="store-new-products">
        <div class="container">
          <div class="row">
            <div class="col-12" data-aos="fade-up">
              <h5>Produk Terbaru</h5>
            </div>
          </div>
          <div class="row">
            @php
                $incrementProduct = 0
            @endphp
            @forelse ($products as $product)
            {{-- PRODUCT  --}}
            <div
              class="col-6 col-md-4 col-lg-3"
              {{-- class="col-md-2" --}}
              data-aos="fade-up"
              data-aos-delay="{{ $incrementProduct+= 100 }}">
              <a href="/details/{{ $product->slug }}" class="component-products d-block">
                {{-- {{ route('detail', $product->slug) }} --}}
                {{-- <div class="card shadow bg-body rounded">
                    @if ($product->galleries->count())
                        <img src="{{ Storage::url($product->galleries->first()->photos) }}" class="card-img-top" alt="...">
                    @else
                    <img src="/images/no-img.png" class="card-img-top" alt="...">
                    @endif
                    <div class="card-body">
                      <p class="products-text">{{ $product->name }}</p>
                      <p class="products-price">Rp {{ $product->price }} /kg </p>
                    </div>
                  </div> --}}

                  <div class="products-thumbnail">
                  <div class="products-image" 
                      style="
                      @if($product->galleries->count())
                      background-image: url('{{ Storage::url($product->galleries->first()->photos) }}')
                      @else
                      background-image: url('/images/no-img.png')
                      @endif
                      ">

                      {{-- @if ($product->galleries->count())
                          <img src="{{ Storage::url($product->galleries->first()->photos) }}" alt="">
                      @else
                          <img src="/images/no-img" alt="">
                      @endif --}}
                </div>
                </div>
                <div class="products-text">
                  {{ $product->name }}
                </div>
                <div class="products-price">
                  Rp {{ number_format($product->price) }}
                </div>
              </a>
            </div>
            {{-- END PRODUCT --}}
            @empty
                <div class="col-12 text-center py-5" data-aos="fade-up"
                  data-aos-delay="100">
                  No Product Found
                </div>
            @endforelse
            

          </div>
        </div>
      </section>
</div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md">
                {{ $products->links() }}
            </div>
        </div>
    </div>


@endsection
