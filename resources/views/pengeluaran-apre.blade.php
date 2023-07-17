@extends('template.main')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No</th>
        <th>Tanggal</th>
        <th>Noreff</th>
        <th>Bagian</th>
        <th>Petugas</th>
      </tr>

      @php
        $no = 1;
      @endphp
      @foreach ($pengeluaran as $pglrn)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $pglrn->tanggal }}</td>
          <td>{{ $pglrn->noreff }}</td>
          <td>{{ $pglrn->nama_bagian }}</td>
          <td>{{ $pglrn->nama_petugas }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
