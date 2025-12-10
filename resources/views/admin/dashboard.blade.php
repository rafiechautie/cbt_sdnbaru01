@extends('layouts.dashboard')

@section('title', 'Dashboard Admin')

@section('content')

{{-- Pengumuman Card --}}
<div class="bg-white shadow rounded p-6 mb-6">
    <h3 class="text-xl font-bold mb-2 text-blue-700">Pengumuman</h3>
    <p class="text-gray-700 leading-relaxed">
        Selamat datang di Sistem CBT SDN Baru 01. Silakan pilih menu di kiri untuk mengatur guru, siswa,
        mata pelajaran, soal, dan jadwal ujian.
    </p>
</div>

{{-- 3 Informasi Box --}}
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <div class="bg-white p-6 rounded shadow text-center">
        <div class="text-4xl font-bold text-blue-700 mb-2">12</div>
        <p class="text-gray-600">Guru Terdaftar</p>
    </div>

    <div class="bg-white p-6 rounded shadow text-center">
        <div class="text-4xl font-bold text-blue-700 mb-2">328</div>
        <p class="text-gray-600">Siswa Terdaftar</p>
    </div>

    <div class="bg-white p-6 rounded shadow text-center">
        <div class="text-4xl font-bold text-blue-700 mb-2">87</div>
        <p class="text-gray-600">Bank Soal</p>
    </div>

</div>

@endsection
