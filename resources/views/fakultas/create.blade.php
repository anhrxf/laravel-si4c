@extends('main')

@section('title', 'Tambah Fakultas')

@section('content')
    <form action="{{ route('fakultas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_fakultas">Nama Fakultas</label>
            <input type="text" name="nama" class="form-control" value ="{{ old('nama') }}">
            @error("nama")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="singkatan">Singkatan</label>
            <input type="text" name="singkatan" class="form-control" value ="{{ old('singkatan') }}">
            @error("singkatan")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="dekan">Dekan</label>
            <input type="text" name="dekan" class="form-control" value ="{{ old('dekan') }}">
            @error("dekan")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection
