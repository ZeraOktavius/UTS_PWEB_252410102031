@extends('layouts.app')

@section('title', 'Dashboard - KOSOY')

@section('content')

<div class="dashboard-container">

    <div class="dashboard-header">
        <div>
            <p class="welcome-text">OVERVIEW</p>

            <h1>Dashboard</h1>

            <p>
                Selamat datang kembali,
                <strong>{{ session('username') }}</strong>!
            </p>
        </div>

        <div class="date-box">
            {{ date('d F Y') }}
        </div>
    </div>

    {{-- STATISTIK KAMAR --}}

    <div class="stats-grid">

        <div class="stat-card">
            <div class="stat-icon">🏠</div>
            <p>Total Kamar</p>
            <h2>{{ $totalRooms }}</h2>
            <span>Seluruh kamar kos</span>
        </div>

        <div class="stat-card">
            <div class="stat-icon">🔑</div>
            <p>Kamar Terisi</p>
            <h2>{{ $occupiedRooms }}</h2>
            <span>Kamar sedang ditempati</span>
        </div>

        <div class="stat-card">
            <div class="stat-icon">✨</div>
            <p>Kamar Kosong</p>
            <h2>{{ $availableRooms }}</h2>
            <span>Siap untuk disewakan</span>
        </div>

    </div>

    {{-- DAFTAR KAMAR --}}

    <div class="room-section">

        <div class="section-heading">
            <div>
                <h2>Daftar Kamar</h2>
                <p>Informasi kamar kos KOSOY</p>
            </div>

            <a href="{{ url('/pengelolaan') }}" class="btn-primary">
                Lihat Semua
            </a>
        </div>

        <div class="table-wrapper">

            <table class="room-table">

                <thead>
                    <tr>
                        <th>Nomor Kamar</th>
                        <th>Tipe</th>
                        <th>Harga/Bulan</th>
                        <th>Penghuni</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($rooms as $room)

                    <tr>
                        <td>
                            <strong>{{ $room['number'] }}</strong>
                        </td>

                        <td>{{ $room['type'] }}</td>

                        <td>
                            Rp {{ number_format($room['price'], 0, ',', '.') }}
                        </td>

                        <td>{{ $room['tenant'] }}</td>

                        <td>
                            @if ($room['status'] == 'Terisi')
                                <span class="status-badge occupied">
                                    Terisi
                                </span>
                            @else
                                <span class="status-badge available">
                                    Kosong
                                </span>
                            @endif
                        </td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection
