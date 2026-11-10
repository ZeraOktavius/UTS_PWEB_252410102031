@extends('layouts.app')

@section('title', 'Pengelolaan Kamar - KOSOY')

@section('content')

<div class="management-container">

    {{-- HEADER --}}

    <div class="management-header">

        <div>
            <span class="management-label">ROOM MANAGEMENT</span>

            <h1>Pengelolaan Kamar</h1>

            <p>
                Kelola dan pantau informasi seluruh kamar KOSOY.
            </p>
        </div>

        <div class="management-date">
            {{ date('d F Y') }}
        </div>

    </div>

    {{-- STATISTIK --}}

    <div class="management-stats">

        <div class="management-card">
            <span>Total Kamar</span>
            <h2>{{ $totalRooms }}</h2>
            <small>Seluruh kamar</small>
        </div>

        <div class="management-card">
            <span>Kamar Terisi</span>
            <h2>{{ $occupiedRooms }}</h2>
            <small>Sedang disewakan</small>
        </div>

        <div class="management-card">
            <span>Kamar Kosong</span>
            <h2>{{ $availableRooms }}</h2>
            <small>Siap disewakan</small>
        </div>

    </div>

    {{-- INFORMASI TIPE KAMAR --}}

    <div class="room-type-section">

        <h2>Informasi Tipe Kamar</h2>

        <div class="room-type-grid">

            <div class="type-card">
                <div class="type-icon">🛏️</div>
                <h3>Kamar Kecil</h3>
                <h2>Rp400.000</h2>
                <p>Harga sewa per bulan</p>
            </div>

            <div class="type-card">
                <div class="type-icon">🏠</div>
                <h3>Kamar Besar</h3>
                <h2>Rp600.000</h2>
                <p>Harga sewa per bulan</p>
            </div>

        </div>

    </div>

    {{-- DAFTAR KAMAR --}}

    <div class="management-table-section">

        <div class="management-table-header">

            <div>
                <h2>Daftar Seluruh Kamar</h2>
                <p>Informasi status dan penyewa kamar.</p>
            </div>

        </div>

        {{-- PENCARIAN --}}

    <div class="search-room">
        <input
        type="text"
        id="searchRoom"
        placeholder="Cari nomor kamar atau nama penyewa..."
        onkeyup="searchRooms()"
        autocomplete="off"
        >
        </div>

        <div class="table-wrapper">

            <table class="room-table" id="roomTable">

                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nomor Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Harga/Bulan</th>
                        <th>Nama Penyewa</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($rooms as $index => $room)

                    <tr>

                        <td>{{ $index + 1 }}</td>

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

        <div class="table-information">
            Menampilkan {{ count($rooms) }} kamar KOSOY.
        </div>

    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const searchInput = document.getElementById('searchRoom');
        const roomTable = document.getElementById('roomTable');

        if (!searchInput || !roomTable) {
            return;
        }

        searchInput.addEventListener('input', function () {

            const keyword = this.value.toLowerCase().trim();

            const rows = roomTable.querySelectorAll('tbody tr');

            rows.forEach(function (row) {

                const roomData = row.textContent.toLowerCase();

                if (roomData.includes(keyword)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }

            });

        });

    });
</script>

@endsection
