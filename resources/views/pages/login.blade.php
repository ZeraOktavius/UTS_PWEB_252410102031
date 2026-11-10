@extends('layouts.app')

@section('title', 'Login - KOSOY')

@section('content')

<div class="login-page">

    <div class="login-card">

        <div class="login-logo">
            KOSOY<span>.</span>
        </div>

        <div class="login-heading">
            <h1>Welcome Back!</h1>
            <p>Sign in to manage your boarding house.</p>
        </div>

        @if ($errors->any())
            <div class="error-message">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="username">Username</label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    value="{{ old('username') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >
            </div>

            <button type="submit" class="login-button">
                Login to Dashboard
            </button>

        </form>

        <div class="login-footer">
            <p>Smart Boarding House Management System</p>
            <span>&copy; {{ date('Y') }} KOSOY</span>
        </div>

    </div>

</div>

@endsection
