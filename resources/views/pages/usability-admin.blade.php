@extends('layouts.app')

@section('title')
    Store Cart
@endsection

@section('content')

    <div class="page-content page-home">
        <div class="container">
            <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                          
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Q1</th>
                        <th scope="col">Q2</th>
                        <th scope="col">Q3</th>
                        <th scope="col">Q4</th>
                        <th scope="col">Q5</th>
                        <th scope="col">Q6</th>
                        <th scope="col">Q7</th>
                        <th scope="col">Q8</th>
                        <th scope="col">Q9</th>
                        <th scope="col">Q10</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($usability as $item)
                        <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->q1 }}</td>
                        <td>{{ $item->q2 }}</td>
                        <td>{{ $item->q3 }}</td>
                        <td>{{ $item->q4 }}</td>
                        <td>{{ $item->q5 }}</td>
                        <td>{{ $item->q6 }}</td>
                        <td>{{ $item->q7 }}</td>
                        <td>{{ $item->q8 }}</td>
                        <td>{{ $item->q9 }}</td>
                        <td>{{ $item->q10 }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md">
                    {{ $usability->links() }}
                </div>
            </div>

        </div>
    </div>        