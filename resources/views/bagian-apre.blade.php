@extends('template.main')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No</th>
        <th>Nama Bagian</th>
        <th>Kepala Bagian</th>
        <th>Telepon</th>
      </tr>

      @php
        $no = 1;
      @endphp
      @foreach ($bagian as $bgn)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $bgn->nama_bagian }}</td>
          <td>{{ $bgn->kepala_bagian }}</td>
          <td>{{ $bgn->telp }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
