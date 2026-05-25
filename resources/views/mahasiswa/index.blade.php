@extends('main')

@section('title', 'Mahasiswa')

@section('content')
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered table-hover">
    <tr>
        <th>NPM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach($mahasiswas as $key => $mhs)
    <tr>
        <td>{{ $mhs->npm }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mahasiswa->prodi->nama_prodi ?? '-' }}</td>
        <td>
            @if($mahasiswa->foto)
                <img src="{{ asset($mahasiswa->foto) }}" alt="Foto Mahasiswa" width="80">
            @else
                <spam class="text-muted">Tidak ada foto</spam>
            @endif
        </td>
        <td>
            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-sm btn-info">Detail</a>
            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Hapus data mahasiswa?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection