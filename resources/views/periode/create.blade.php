@extends('main')

@section('title', 'Tambah Periode')

@section('content')
    <form action="{{ route('periode.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tahun_akademik">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" class="form-control" value ="{{ old('tahun_akademik') }}">
            @error("tahun_akademik")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="kode_semester">Kode Semester</label>
            <input type="text" name="kode_semester" class="form-control" value ="{{ old('kode_semester') }}">
            @error("kode_semester")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection