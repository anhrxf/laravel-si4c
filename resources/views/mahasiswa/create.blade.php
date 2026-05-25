@extends('main')

@section('title', 'Tambah Fakultas')

@section('content')
    <form action="{{ route('fakultas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" name="foto" class="form-control" value ="{{ old('foto') }}">
            @error("foto")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="prodi_id">Program Studi</label>
            <input type="text" name="prodi_id" class="form-control" value ="{{ old('prodi_id') }}">
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
