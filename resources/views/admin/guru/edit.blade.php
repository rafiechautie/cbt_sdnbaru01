@extends('layouts.dashboard')

@section('title', 'Ubah Data Guru')

@section('content')

<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-800">Edit Guru</h1>
    <p class="text-sm text-gray-500">Perbarui data guru</p>
</div>

<div class="bg-white shadow-lg rounded-xl p-6 max-w-3xl">

    <form action="{{ route('admin.guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Nama Guru --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Nama Guru
                </label>
                <input type="text"
                    name="name"
                    value="{{ old('nama', $guru->user->name) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            {{-- Username --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Username
                </label>
                <input type="text"
                    name="username"
                    value="{{ old('username', $guru->user->username) }}"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            {{-- Password --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Password
                </label>
                <input type="password"
                    name="password"
                    placeholder="Minimal 8 karakter"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
            </div>

            {{-- Mata Pelajaran --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Mata Pelajaran
                </label>
                <select name="mapel_id"
                    class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">

                    <option value="">-- Pilih Mapel --</option>

                    @foreach ($mapel as $item)
                        <option value="{{ $item->id }}"
                            {{ old('mapel_id', $guru->mapel_id) == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_mapel }}
                        </option>
                    @endforeach

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
                Ubah
            </button>

        </div>

    </form>

</div>

@endsection
