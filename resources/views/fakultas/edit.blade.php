@extends('main')

@section('title', 'Edit Fakultas')

@section('content')
    <form action="{{ route('fakultas.update', $fakultas->id )}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nama"> Nama</label>
        <input type="text" name="nama" class="form-control" value="{{old('nama') ?? $fakultas->nama }}">
        @error('nama')
           <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="singkatan"> Singkatan</label>
        <input type="text" name="singkatan" class="form-control" value="{{old('singkatan') ?? $fakultas->singkatan }}">
        @error('singkatan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="dekan"> Dekan</label>
        <input type="text" name="dekan" class="form-control" value="{{old('dekan') ?? $fakultas->dekan }}">
        @error('dekan')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection