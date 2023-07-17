@extends('template.main')

@section('content')

  <body>
    <table class="table-bordered table">
      <tr>
        <th>No</th>
        <th>Nama Petugas</th>
        <th>Handphone</th>
        <th>Level</th>
      </tr>

      @php
        $no = 1;
      @endphp
      @foreach ($petugas as $ptg)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $ptg->nama_petugas }}</td>
          <td>{{ $ptg->handphone }}</td>
          <td>{{ $ptg->level }}</td>
        </tr>
      @endforeach
    </table>
  </body>
@endsection
