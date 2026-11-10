<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Menampilkan halaman login
    public function login()
    {
        return view('pages.login');
    }

    // Memproses login
    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Menyimpan username ke session
        session(['username' => $request->username]);

        // Mengarahkan pengguna ke dashboard
        return redirect()->route('dashboard');
    }

    // Menampilkan dashboard
    public function dashboard()
    {
        if (!session()->has('username')) {
    return redirect()->route('login');
        }
    // Data kamar kos
    $rooms = [
    [
        'number' => 'A01',
        'type' => 'Kecil',
        'price' => 400000,
        'status' => 'Terisi',
        'tenant' => 'Dinar'
    ],
    [
        'number' => 'A02',
        'type' => 'Besar',
        'price' => 600000,
        'status' => 'Kosong',
        'tenant' => '-'
    ],
    [
        'number' => 'A03',
        'type' => 'Kecil',
        'price' => 400000,
        'status' => 'Terisi',
        'tenant' => 'Rifki'
    ],
    [
        'number' => 'B01',
        'type' => 'Besar',
        'price' => 600000,
        'status' => 'Kosong',
        'tenant' => '-'
    ],
    [
        'number' => 'B02',
        'type' => 'Besar',
        'price' => 600000,
        'status' => 'Terisi',
        'tenant' => 'Rega'
    ],
    [
        'number' => 'B03',
        'type' => 'Kecil',
        'price' => 400000,
        'status' => 'Kosong',
        'tenant' => '-'
    ],
    ];

    // Menghitung statistik kamar
    $totalRooms = count($rooms);

    $occupiedRooms = count(array_filter($rooms, function ($room) {
        return $room['status'] == 'Terisi';
    }));

    $availableRooms = $totalRooms - $occupiedRooms;

    return view('pages.dashboard', compact(
        'rooms',
        'totalRooms',
        'occupiedRooms',
        'availableRooms'
    ));
}
    // Logout
public function logout()
{
    session()->invalidate();

    session()->regenerateToken();

    return redirect()->route('login');
}

    public function pengelolaan()
{

    if (!session()->has('username')) {
    return redirect()->route('login');
    }


    $rooms = [
        [
            'number' => 'A01',
            'type' => 'Kecil',
            'price' => 400000,
            'status' => 'Terisi',
            'tenant' => 'Dinar'
        ],
        [
            'number' => 'A02',
            'type' => 'Besar',
            'price' => 600000,
            'status' => 'Kosong',
            'tenant' => '-'
        ],
        [
            'number' => 'A03',
            'type' => 'Kecil',
            'price' => 400000,
            'status' => 'Terisi',
            'tenant' => 'Rifki'
        ],
        [
            'number' => 'B01',
            'type' => 'Besar',
            'price' => 600000,
            'status' => 'Kosong',
            'tenant' => '-'
        ],
        [
            'number' => 'B02',
            'type' => 'Besar',
            'price' => 600000,
            'status' => 'Terisi',
            'tenant' => 'Rega'
        ],
        [
            'number' => 'B03',
            'type' => 'Kecil',
            'price' => 400000,
            'status' => 'Kosong',
            'tenant' => '-'
        ],
    ];

    $totalRooms = count($rooms);

    $occupiedRooms = count(array_filter($rooms, function ($room) {
        return $room['status'] == 'Terisi';
    }));

    $availableRooms = $totalRooms - $occupiedRooms;

    return view('pages.pengelolaan', compact(
        'rooms',
        'totalRooms',
        'occupiedRooms',
        'availableRooms'
    ));
}

public function profile()
{

if (!session()->has('username')) {
    return redirect()->route('login');
}

    $user = [
        'username' => session('username'),
        'role' => 'Administrator',
        'status' => 'Aktif',
        'application' => 'KOSOY',
        'description' => 'Smart Boarding House Management System',
        'framework' => 'Laravel 13',
    ];

    return view('pages.profile', compact('user'));
}
}
