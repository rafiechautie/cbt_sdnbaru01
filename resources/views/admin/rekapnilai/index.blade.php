@extends('layouts.dashboard')

@section('title', 'Data Rekap Nilai')

@section('content')

@php
    // DATA DUMMY UNTUK REKAP NILAI
    $rekap = [
        [
            'siswa' => 'Aulia Rahman',
            'kelas' => '6A',
            'mapel' => 'Matematika',
            'nilai' => 90,
            'benar' => 18,
            'salah' => 2,
            'durasi' => '20 menit',
            'selesai' => '2025-01-12 09:22',
        ],
        [
            'siswa' => 'Putri Lestari',
            'kelas' => '6A',
            'mapel' => 'Matematika',
            'nilai' => 75,
            'benar' => 15,
            'salah' => 5,
            'durasi' => '22 menit',
            'selesai' => '2025-01-12 09:25',
        ],
        [
            'siswa' => 'Rangga Pratama',
            'kelas' => '6B',
            'mapel' => 'IPA',
            'nilai' => 85,
            'benar' => 17,
            'salah' => 3,
            'durasi' => '18 menit',
            'selesai' => '2025-01-13 09:05',
        ],
    ];
@endphp

<div class="bg-white shadow rounded p-6 mb-6">
    <h3 class="text-xl font-bold text-blue-700 mb-4">Data Rekap Nilai</h3>
    <p class="text-gray-600">Admin dan Guru dapat melihat hasil ujian siswa per mapel.</p>
</div>

<div class="bg-white shadow rounded p-4">

    <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                <th class="p-3 border">No</th>
                <th class="p-3 border">Siswa</th>
                <th class="p-3 border">Kelas</th>
                <th class="p-3 border">Mapel</th>
                <th class="p-3 border text-center">Nilai</th>
                <th class="p-3 border text-center">Benar</th>
                <th class="p-3 border text-center">Salah</th>
                <th class="p-3 border text-center">Durasi</th>
                <th class="p-3 border text-center">Selesai Pada</th>
                <th class="p-3 border text-center">Aksi</th>
            </tr>
        </thead>

        <tbody class="text-gray-800">

            @foreach ($rekap as $index => $item)
            <tr class="hover:bg-gray-50 transition">
                <td class="p-3 border text-center">{{ $index + 1 }}</td>

                <td class="p-3 border font-semibold">{{ $item['siswa'] }}</td>

                <td class="p-3 border text-center">{{ $item['kelas'] }}</td>

                <td class="p-3 border">{{ $item['mapel'] }}</td>

                <td class="p-3 border text-center font-bold text-blue-700">
                    {{ $item['nilai'] }}
                </td>

                <td class="p-3 border text-center text-green-700 font-semibold">
                    {{ $item['benar'] }}
                </td>

                <td class="p-3 border text-center text-red-700 font-semibold">
                    {{ $item['salah'] }}
                </td>

                <td class="p-3 border text-center">
                    {{ $item['durasi'] }}
                </td>

                <td class="p-3 border text-center">
                    {{ $item['selesai'] }}
                </td>

                <td class="p-3 border text-center">
                    <div class="flex justify-center gap-2">

                        <a href="#"
                           class="px-3 py-1 bg-blue-600 text-white rounded text-sm hover:bg-blue-700">
                           Detail
                        </a>

                        <a href="#"
                           class="px-3 py-1 bg-green-600 text-white rounded text-sm hover:bg-green-700">
                           Download
                        </a>

                    </div>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>

</div>

@endsection
