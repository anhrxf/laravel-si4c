<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil data mahasiswa beserta relasi prodi
        $mahasiswa = Mahasiswa::with('prodi')->get();
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //ambil data prodi untuk list dropdown
        $prodi = Prodi::all();
        return view('mahasiswa.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $input = $request->validate([
            'npm' => 'required|unique:mahasiswa,npm',
            'nama' => 'required',
            'prodi_id' => 'required|exists:prodi,id',
            'foto' => 'nullable|image|max:2048',
        ]);

        //upload file foto jika ada
        if ($request->hasFile('foto')) {
            // rename file dengan npm untuk menghindari duplikat nama file
            $filename = $input['npm'] . '.' . $request->file('foto')->getClientOriginalExtension();
            // simpan foto di storage/app/public/foto
            $input['foto'] = $request->file('foto')->storeAs('fotos', $filename, 'public');
        } else {
            $input['foto'] = null; // set foto ke null jika tidak ada file yg di upload
        }

        // simpan data mahasiswa 
        Mahasiswa::create($input);

        // redirect ke halaman index dengan pesan sukses
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil disimpan');
    }
    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
