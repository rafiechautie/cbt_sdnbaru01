@extends('layouts.dashboard')

@section('title', 'Tambah Guru')

@section('content')

<div class="bg-white shadow rounded p-6 mb-6">
    <h3 class="text-xl font-bold text-blue-700 mb-1">Tambah Guru</h3>
    <p class="text-gray-600 text-sm">Masukkan data guru baru</p>
</div>

<div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl">

    <form action="#" method="POST">
        {{-- @csrf --}}

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Nama Guru --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Nama Guru
                </label>
                <input type="text"
                       placeholder="Contoh: Bapak Ahmad"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            {{-- Username --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Username
                </label>
                <input type="text"
                       placeholder="Contoh: guru001"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            {{-- Password --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Password
                </label>
                <input type="password"
                       placeholder="Minimal 8 karakter"
                       class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            {{-- Mata Pelajaran --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Mata Pelajaran
                </label>
                <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <option value="">-- Pilih Mapel --</option>
                    <option>Matematika</option>
                    <option>Bahasa Indonesia</option>
                    <option>IPA</option>
                    <option>IPS</option>
                    <option>PAI</option>
                </select>
            </div>

        </div>

        {{-- Tombol --}}
        <div class="flex justify-end gap-3 mt-8">

            <a href="{{ route('admin.guru.index') }}"
               class="px-5 py-2 rounded-lg border border-gray-300 text-gray-700 hover:bg-gray-100 transition">
                Batal
            </a>

            <button type="submit"
                    class="px-5 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition shadow">
                Simpan
            </button>

        </div>

    </form>

</div>

@endsection
