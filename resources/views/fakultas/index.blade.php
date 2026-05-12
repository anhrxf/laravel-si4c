@extends('main')
@section('content')
<a href="{{ route('fakultas.create') }}" class="btn btn-primary mb-3">Tambah Fakultas</a>
@section('title', 'Fakultas')
    
<h2>Data Fakultas</h2>
<table class="table table-bordered table-hover">
    <tr>
        <th>Nama Fakultas</th>
        <th>Singkatan</th>
        <th>Dekan</th>
    </tr>

    @foreach($result as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->singkatan }}</td>
        <td>{{ $item->dekan }}</td>
    </tr>
    @endforeach

</table>
@endsection