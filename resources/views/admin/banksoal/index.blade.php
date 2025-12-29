@extends('layouts.dashboard')

@section('title', 'Data Soal Guru')

@section('content')

<div class="bg-white shadow rounded p-6 mb-6">
    <h3 class="text-xl font-bold text-blue-700 mb-4">Data Soal Guru</h3>

    {{-- tombol tambah soal --}}
    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Soal
    </a>
</div>

<div class="bg-white shadow-lg rounded-xl p-6">

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Daftar Guru & Status Soal</h3>
    </div>

    <div class="overflow-hidden rounded-xl border border-gray-200">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-4 py-3 text-left">NO</th>
                    <th class="px-4 py-3 text-left">Nama Guru</th>
                    <th class="px-4 py-3 text-left">Mapel</th>
                    <th class="px-4 py-3 text-left">Jumlah Soal</th>
                    <th class="px-4 py-3 text-left">Status</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                @php
                    $data = [
                        [
                            'nama_guru' => 'Bapak Ahmad',
                            'mapel' => 'Matematika',
                            'jumlah_soal' => 15,
                            'status' => 'Sudah Ada Soal'
                        ],
                        [
                            'nama_guru' => 'Bu Siti',
                            'mapel' => 'Bahasa Indonesia',
                            'jumlah_soal' => 0,
                            'status' => 'Belum Ada Soal'
                        ],
                        [
                            'nama_guru' => 'Bu Rina',
                            'mapel' => 'IPA',
                            'jumlah_soal' => 8,
                            'status' => 'Sudah Ada Soal'
                        ],
                        [
                            'nama_guru' => 'Bapak Yusuf',
                            'mapel' => 'PAI',
                            'jumlah_soal' => 0,
                            'status' => 'Belum Ada Soal'
                        ],
                    ];
                @endphp

                @foreach($data as $index => $guru)
                <tr class="hover:bg-gray-50 transition border-b">
                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                    <td class="px-4 py-3 font-medium">{{ $guru['nama_guru'] }}</td>
                    <td class="px-4 py-3">{{ $guru['mapel'] }}</td>
                    <td class="px-4 py-3">{{ $guru['jumlah_soal'] }}</td>
                    <td class="px-4 py-3">
                        @if($guru['status'] === 'Sudah Ada Soal')
                            <span class="inline-block px-2 py-1 text-green-700 bg-green-100 rounded-full text-xs font-semibold">
                                {{ $guru['status'] }}
                            </span>
                        @else
                            <span class="inline-block px-2 py-1 text-red-700 bg-red-100 rounded-full text-xs font-semibold">
                                {{ $guru['status'] }}
                            </span>
                        @endif
                    </td>
                    <td class="px-4 py-3 text-center">
                        <div class="flex justify-center gap-2">

                            <button
                                class="flex items-center gap-1 bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded-lg text-xs shadow transition">
                                <span class="material-icons text-xs">edit</span>
                                Edit
                            </button>

                            <button
                                class="flex items-center gap-1 bg-red-500 hover:bg-red-600 text-white px-3 py-1.5 rounded-lg text-xs shadow transition">
                                <span class="material-icons text-xs">delete</span>
                                Hapus
                            </button>

                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>

@endsection
