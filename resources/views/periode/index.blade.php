@extends('main')
@section('content')
<a href="{{ route('periode.create') }}" class="btn btn-primary mb-3">Tambah Periode</a>
@section('title', 'Periode')

<h2>Data Periode</h2>
<table class="table table-bordered table-hover">
    <tr>
        <th>Tahun Akademik</th>
        <th>Kode Semester</th>
    </tr>

    @foreach($result as $item)
    <tr>
        <td>{{ $item->tahun_akademik }}</td>
        <td>{{ $item->kode_semester }}</td>
    </tr>
    @endforeach

</table>
@endsection