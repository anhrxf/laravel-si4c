<h2>Data Priode</h2>
@foreach ($result as $item)
    {{ $item->tahun_akademik }} - {{ $item->kode_semester }} <br/>
@endforeach