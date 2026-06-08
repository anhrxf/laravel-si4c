@extends('main')

@section('content')
    {{-- ambil dari highchart.js --}}

    {{-- html --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    {{-- <figure class="highcharts-figure"> --}}
        <div class="row">
            <div class="col-12 col-md-6">
                <div id="container1"></div> 
            </div>
            <div class="col-12 col-md-6">
                <div id="container2"></div>
            </div>
        </div>
    {{-- </figure> --}}

    
    {{-- js --}}
    <script>
        // column chart => jumlah mahasiswa per prodi
        Highcharts.chart('container1', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Jumlah Mahasiswa UMDP per Program Studi'
            },
            subtitle: {
                text:
                    'Source: Aplikasi SIMPONI'
            },
            xAxis: {
                categories: [
                    @foreach ($grafikmhs as $data)
                        '{{ $data->nama_prodi }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Program Studi'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Mahasiswa'
                }
            },
            tooltip: {
                valueSuffix: ' (orang)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Mahasiswa',
                    data: [
                        @foreach ($grafikmhs as $data)
                            {{ $data->jumlah_mhs }},
                        @endforeach
                    ]
                }
            ]
        });
         // column chart => jumlah mahasiswa per angkatan
        Highcharts.chart('container2', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Jumlah Mahasiswa UMDP per Angakatan'
            },
            subtitle: {
                text:
                    'Source: Aplikasi SIMPONI'
            },
            xAxis: {
                categories: [
                    @foreach ($grafik_angkatan as $data)
                        '{{ $data->angkatan }}',
                    @endforeach
                ],
                crosshair: true,
                accessibility: {
                    description: 'Program Studi'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Mahasiswa'
                }
            },
            tooltip: {
                valueSuffix: ' (orang)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                {
                    name: 'Mahasiswa',
                    data: [
                        @foreach ($grafik_angkatan as $data)
                            {{ $data->jumlah_mhs }},
                        @endforeach
                    ]
                }
            ]
        });
    </script>
@endsection