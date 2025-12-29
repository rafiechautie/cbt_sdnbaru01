@extends('layouts.dashboard')

@section('title', 'Data Jadwal Ujian')

@section('content')

@php
    // DATA DUMMY SAJA UNTUK SEMENTARA
    $jadwal = [
        [
            'mapel' => 'Matematika',
            'kelas' => '6A',
            'tanggal' => '2025-01-12',
            'mulai' => '08:00',
            'selesai' => '09:30',
            'token' => 'ABC123',
            'status' => 'Aktif',
        ],
        [
            'mapel' => 'Bahasa Indonesia',
            'kelas' => '6B',
            'tanggal' => '2025-01-12',
            'mulai' => '10:00',
            'selesai' => '11:30',
            'token' => 'XYZ789',
            'status' => 'Nonaktif',
        ],
        [
            'mapel' => 'IPA',
            'kelas' => '5A',
            'tanggal' => '2025-01-13',
            'mulai' => '08:00',
            'selesai' => '09:00',
            'token' => 'QWE456',
            'status' => 'Aktif',
        ],
    ];
@endphp


<div class="bg-white shadow rounded p-6 mb-6">
    <h3 class="text-xl font-bold text-blue-700 mb-4">Data Jadwal Ujian</h3>

    {{-- tombol tambah jadwal ujian --}}
    <a href="#"
       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
        + Tambah Jadwal
    </a>
</div>

<div class="bg-white shadow rounded p-4">

    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                <th class="p-3 border">No</th>
                <th class="p-3 border">Mapel</th>
                <th class="p-3 border">Kelas</th>
                <th class="p-3 border">Tanggal</th>
                <th class="p-3 border">Waktu</th>
                <th class="p-3 border text-center">Token</th>
                <th class="p-3 border text-center">Status</th>
                <th class="p-3 border text-center">Aksi</th>
            </tr>
        </thead>

        <tbody class="text-gray-800">

            @foreach ($jadwal as $index => $item)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-3 border text-center">{{ $index + 1 }}</td>

                <td class="p-3 border font-semibold">{{ $item['mapel'] }}</td>

                <td class="p-3 border text-center">{{ $item['kelas'] }}</td>

                <td class="p-3 border text-center">{{ $item['tanggal'] }}</td>

                <td class="p-3 border text-center">
                    {{ $item['mulai'] }} - {{ $item['selesai'] }}
                </td>

                <td class="p-3 border text-center font-mono text-blue-700">{{ $item['token'] }}</td>

                <td class="p-3 border text-center">
                    @if($item['status'] === 'Aktif')
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                            Aktif
                        </span>
                    @else
                        <span class="px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">
                            Nonaktif
                        </span>
                    @endif
                </td>

                <td class="p-3 border text-center">
                    <div class="flex justify-center gap-2">

                        <a href="#" class="px-3 py-1 bg-blue-600 text-white rounded text-sm hover:bg-blue-700">
                            Lihat
                        </a>

                        <a href="#" class="px-3 py-1 bg-yellow-400 text-white rounded text-sm hover:bg-yellow-500">
                            Edit
                        </a>

                        <a href="#" class="px-3 py-1 bg-red-500 text-white rounded text-sm hover:bg-red-600">
                            Hapus
                        </a>

                    </div>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
