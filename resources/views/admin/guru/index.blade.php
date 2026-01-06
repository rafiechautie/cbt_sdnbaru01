@extends('layouts.dashboard')

@section('title', 'Data Guru')

@section('content')

<div class="bg-white shadow rounded p-6 mb-6">
    <h3 class="text-xl font-bold text-blue-700 mb-4">Data Guru</h3>

    {{-- tombol tambah guru --}}
    <a href="{{ route('admin.guru.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        + Tambah Guru
    </a>
</div>

{{-- list guru (nanti dinamis) --}}
<div class="bg-white shadow-lg rounded-xl p-6">

    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-800">Daftar Guru</h3>
    </div>

    <div class="overflow-hidden rounded-xl border border-gray-200">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50 text-gray-600 uppercase text-xs font-semibold">
                <tr>
                    <th class="px-4 py-3 text-left">NO</th>
                    <th class="px-4 py-3 text-left">Nama</th>
                    <th class="px-4 py-3 text-left">Username</th>
                    <th class="px-4 py-3 text-left">Mapel</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                @foreach ($guru as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item->user->username }}</td>
                    <td>{{ $item->mapel_id }}</td>
                    <td>
                        <a href="{{ route('admin.guru.edit', $item->id) }}"
                                class="flex items-center gap-1 bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1.5 rounded-lg text-xs shadow transition">
                                    <span class="material-icons text-xs">edit</span>
                                    Edit
                        </a>

                        <form action="{{ route('admin.guru.destroy', $item->id) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin hapus data guru ini?')"
                            class="inline">
                            @csrf
                            @method('DELETE')

                            <button class="flex items-center gap-1 bg-red-500 text-white px-3 py-1.5 rounded-lg text-xs">
                                <span class="material-icons text-xs">delete</span>
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>



@endsection
