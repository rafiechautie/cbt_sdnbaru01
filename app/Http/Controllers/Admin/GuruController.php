<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
     public function index()
     {
        $guru = Guru::with('user')->get();
        return view('admin.guru.index', compact('guru'));
     }

     public function create()
     {
        $mapel = MataPelajaran::all();
        return view('admin.guru.create', compact('mapel'));
     }

     public function store(Request $request)
     {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:6',
            'mapel_id' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'guru',
        ]);

        Guru::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'mapel_id' => $request->mapel_id
        ]);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data Guru Berhasil Ditambahkan');
     }

     public function edit($id)
     {
        $guru = Guru::with('user')->findOrFail($id);
        $mapel = MataPelajaran::all();

        // @dd($guru->user);
        return view('admin.guru.edit', compact('guru', 'mapel'));
     }

     public function update(Request $request, $id)
     {
        // dd($request->all());
        $guru = Guru::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $guru->user_id,
        ]);

        $guru->user->update([
            'name' => $request->name,
            'username' => $request->username,
        ]);

        if ($request->password) {
            $guru->user->update([
                'password' => Hash::make($request->password),
            ]);
        }

        $guru->update([
            'name' => $request->name,
            'mapel_id' => $request->mapel_id,
        ]);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui');
     }

     public function destroy($id)
     {
        $guru = Guru::findOrFail($id);

        $guru->user->delete();
        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus');
     }

}
