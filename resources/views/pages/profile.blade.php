@extends('layouts.app')

@section('title', 'Profile - KOSOY')

@section('content')

<div class="profile-container">

    <div class="profile-heading">
        <span>ACCOUNT INFORMATION</span>
        <h1>My Profile</h1>
        <p>Informasi akun pengguna KOSOY.</p>
    </div>

    <div class="profile-card">

        <div class="profile-banner"></div>

        <div class="profile-content">

            <div class="profile-avatar">
                {{ strtoupper(substr($user['username'], 0, 1)) }}
            </div>

            <div class="profile-name">
                <h2>{{ $user['username'] }}</h2>
                <p>{{ $user['role'] }}</p>
            </div>

            <span class="profile-status">
                {{ $user['status'] }}
            </span>

        </div>

        <div class="profile-information">

            <h3>Informasi Pengguna</h3>

            <div class="information-grid">

                <div class="information-item">
                    <span>Username</span>
                    <strong>{{ $user['username'] }}</strong>
                </div>

                <div class="information-item">
                    <span>Jabatan</span>
                    <strong>{{ $user['role'] }}</strong>
                </div>

                <div class="information-item">
                    <span>Status Akun</span>
                    <strong>{{ $user['status'] }}</strong>
                </div>

                <div class="information-item">
                    <span>Aplikasi</span>
                    <strong>{{ $user['application'] }}</strong>
                </div>

            </div>

        </div>

        <div class="profile-about">

            <h3>Tentang Aplikasi</h3>

            <p>{{ $user['description'] }}</p>

            <div class="about-details">
                <div>
                    <span>Framework</span>
                    <strong>{{ $user['framework'] }}</strong>
                </div>

                <div>
                    <span>Versi Aplikasi</span>
                    <strong>1.0.0</strong>
                </div>
            </div>

        </div>

        <div class="profile-actions">
            <a href="{{ route('dashboard') }}" class="btn-primary">
                Kembali ke Dashboard
            </a>

            <a href="{{ route('logout') }}" class="logout-button">
                Logout
            </a>
        </div>

    </div>

</div>

@endsection
