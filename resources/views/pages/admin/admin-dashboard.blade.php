@extends('layouts.admin')

@section('title')
Dashboard Store Page
@endsection

@section('content')

    <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Admin Dashboard</h2>
                <p class="dashboard-subtitle">
                  Administrator Pages
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $customer }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Revenue
                        </div>
                        <div class="dashboard-card-subtitle">
                          Rp {{ $revenue }}
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Transaction
                        </div>
                        <div class="dashboard-card-subtitle">
                          {{ $transactions }}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
          

          {{-- @php
            $total0 = $transaction[0]->product->price * $transaction[0]->qty
          @endphp --}}
          
          <div class="container">
                <div class="row ml-1" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="col-md-1">
                 Photo
                </div> --}}
                {{-- <div class="col-md-3">
                 Name
                </div> --}}
                <div class="col-md-4">
                 Date
                </div>
                <div class="col-md-4 text-center">
                 Jumlah
                </div>
                <div class="col-md-4 text-center">
                 Total Harga
                </div>
            </div>
                @foreach ($transaction_data as $transaction)
                
                {{-- @php
                  $total = 0
                @endphp
                @php
                  $total += $transaction->product->price * $transaction->qty
                @endphp
                @php
                  $ongkir = $transaction->transaction->total_price - $total
                @endphp --}}
                {{-- @if ($transaction->transaction_detail->where('transaction_id')->count())
                    
                @else
                    
                @endif --}}
                 <a
                    href="/transaction/{{ $transaction->id }}"
                    class="card card-list d-block">
                    <div class="card-body">
                      <div class="row" data-aos="fade-up" data-aos-delay="200">
                        {{-- <div class="col-md-1">
                          <img
                            src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                            class="w-50"
                          />
                        </div> --}}
                        {{-- <div class="col-md-3">
                          {{ $transaction_count }}
                        </div> --}}
                        <div class="col-md-4">
                          {{ $transaction->created_at->format('Y-m-d') }}
                        </div>
                        <div class="col-md-4 text-center">
                          {{ $transaction->total_qty}}
                        </div>
                        <div class="col-md-4 text-center">
                          Rp. {{number_format($transaction->total_price) }}
                        </div>
                        {{-- <div class="col-md-1 d-none d-md-block">
                          <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                          />
                        </div> --}}
                        {{-- @php
                          $total += $transaction->price * $transaction->qty
                        @endphp --}}
                      </div>
                    </div>
                  </a>
                  @endforeach
          
            
        {{-- <div class="row mt-5">
            <div class="col-md">
                {{ $buyTransactions->links() }}
            </div>
        </div> --}}
        
        </div>

              </div>
            </div>
        </div>

@endsection