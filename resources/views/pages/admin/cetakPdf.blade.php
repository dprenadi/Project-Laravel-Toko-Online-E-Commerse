<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laporan Penjualan</title>
  </head>
  <body>
    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="text-center">
            <h2>Laporan Penjualan</h2>
            <h3>belanjabuah.site</h3>
            <h5>Tanggal : <small>{{ $tglawal }} - {{ $tglakhir }}</small></h5>
          </div>
            <table class="table table-bordered border-dark text-center">
            <thead>
                <tr class="table-secondary">
                <th class="col-md-1">No.</th>
                <th class="col-md-3">Tanggal (Y-M-D)</th>
                <th class="col-md-2">Jumlah</th>
                <th class="col-md-2">Total Harga</th>
                {{-- <th scope="col">Handle</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($cetakPdf as $pdf)    
                <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $pdf->created_at->format('Y-m-d') }}</th>
                <th>{{ $pdf->total_qty }}</th>
                <th>{{ $pdf->total_price }}</th>
                {{-- <td>@mdo</td> --}}
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>


