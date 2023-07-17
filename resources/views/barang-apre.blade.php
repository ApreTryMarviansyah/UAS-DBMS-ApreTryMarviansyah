@extends('template.main')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Satuan </th>
        <th>Kategori</th>
      </tr>

      @php
        $no = 1;
      @endphp
      @foreach ($barang as $brg)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $brg->nama_barang }}</td>
          <td>{{ $brg->satuan }}</td>
          <td>{{ $brg->kategori }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
