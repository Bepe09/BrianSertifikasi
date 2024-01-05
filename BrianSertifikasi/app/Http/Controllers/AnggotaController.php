<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'nullable',
            'alamat' => 'nullable|integer',
            'nomor_telepon' => 'nullable|integer',
        ]);

        Anggota::create($request->all());

        return redirect()->route('anggota.index')->with('success', 'Data anggota berhasil ditambahkan');
    }
}
