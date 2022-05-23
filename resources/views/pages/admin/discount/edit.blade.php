@extends('layouts.admin')

@section('title')
  Products Edit
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Product Edit</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->name }}" Product
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
          <form action="/admin/product/{{ $item->id }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Product</label>
                      <select name="products_id" class="form-control">
                        @foreach ($products as $product)
                          <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Discount</label>
                      <select name="name" class="form-control">
                          <option value="15%">15%</option>
                          <option value="25%">25%</option>
                          <option value="50%">50%</option>
                          <option value="75&">75%</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Value Discount</label>
                      <select name="discount" class="form-control">
                          <option value="0.15">0.15</option>
                          <option value="0.25">0.25</option>
                          <option value="0.50">0.50</option>
                          <option value="0.75">0.75</option>
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


@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
@endpush