@extends('main')
@section('content')
@section('title', 'Fakultas')
    
<h2>Data Fakultas</h2>
<table class="table table-bordered table-hover">
    <tr>
        <th>Nama Fakultas</th>
        <th>Dekan</th>
        <th>Singkatan</th>
    </tr>

    @foreach($result as $item)
    <tr>
        <td>{{ $fakultas->nama_fakultas }}</td>
        <td>{{ $fakultas->dekan }}</td>
        <td>{{ $fakultas->singkatan }}</td>
    </tr>
    @endforeach

</table>
@endsection