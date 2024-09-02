@extends('layout/main')

@section('container')
<div class="awalan">
    <h3>Selamat Datang di Dashboard Dio</h3>
    <h1>Admin Dashboard</h1>
</div>
<div class="card--container">
    <h3 class="main--title text-light">Data Hari Ini</h3>
    <div class="card--wrapper">
        <div class="anggota--card">
            <div class="card--header">
                <div class="ammount">
                    <span class="ammount--value">
                        Data yang Tersedia
                    </span>
                    <span class="anggota-detail text-decoration-none">
                        <a href="{{ route('pages.index') }}" class="text-decoration-none">Lihat Detail</a>
                    </span>
                </div>
                <span class="bg-primary p-4 rounded text-light" style="font-size:40px;">{{ \App\Models\DataBarang::count() }}</span>
            </div>
        </div>
        <div class="anggota--card">
            <div class="card--header">
                <div class="ammount">
                    <span class="ammount--value">
                        Data yang dihapus
                    </span>
                </div>
                <span class="bg-primary p-4 rounded text-light" style="font-size:40px;">{{ $dataTerhapus }}</span>
            </div>
        </div>
        <div class="anggota--card">
            <div class="card--header">
                <div class="ammount">
                    <span class="ammount--value">
                        Data yang ditambahkan hari ini
                    </span>
                </div>
                <span class="bg-primary p-4 rounded text-light" style="font-size:40px;">{{ $dataHariIni }}</span>
            </div>
        </div>
    </div>
</div>
@endsection