@extends('template.main')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No</th>
        <th>Tanggal Pengeluaran</th>
        <th>Barang</th>
        <th>Jumlah</th>
      </tr>

      @php
        $no = 1;
      @endphp
      @foreach ($pengeluaranitem as $pglrn)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $pglrn->tanggal }}</td>
          <td>{{ $pglrn->nama_barang }}</td>
          <td>{{ $pglrn->jumlah }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
