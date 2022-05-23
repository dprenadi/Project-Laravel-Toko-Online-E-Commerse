@extends('layouts.admin')

@section('title')
Products
@endsection

@section('content')

    <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Discount Products</h2>
                <p class="dashboard-subtitle">
                  List of Discount Products
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">

                      
                    <a href="/admin/discount/create" class="btn btn-info mb-3">
                    + Add New Discount Products
                    </a>
                    <div class="table-responsive">
                        <table class="table table-hover scroll-horizontal-vertical w-100" id="crudTable">
                          <thead>
                          <tr>
                          <th>ID</th>
                          <th>Produk</th>
                          <th>Diskon</th>
                          <th>Value</th>
                          <th>Harga Diskon</th>
                          <th>Harga Normal</th>
                          <th>Action</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          </table>
                    </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>

@endsection

@push('addon-script')
    <script>
        // AJAX DataTable
        var datatable = $('#crudTable').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'id', name: 'id' },
                { data: 'product.name', name: 'product.name' },
                { data: 'name', name: 'name' },
                { data: 'discount', name: 'discount' },
                { data: 'dc_price', name: 'dc_price' },
                { data: 'product.price', name: 'product.price' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '15%'
                },
            ]
        });
    </script>
@endpush