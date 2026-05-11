@extends('main.app')
@section('content')
    
@endsection
<h2>Data Fakultas</h2>
@foreach ($result as $item)
    {{ $item->nama }} - {{ $item->singkatan }} - {{ $item->dekan }} <br/>
@endforeach
@endsection