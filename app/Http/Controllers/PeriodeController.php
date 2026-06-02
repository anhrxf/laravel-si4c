<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // akses model periode
        $result = Periode::all(); // select * from periode
        //dd($result); // dump data
        // kirim data periode ke view
        // return view('periode.index')->with('periode', $result);
        // atau compact
        return view('periode.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('periode.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi data periode
        $request = $request->validate([
            'tahun_akademik' => 'required',
            'kode_semester' => 'required'
        ]);
    
        //simpan data periode
        Periode::create($request);
        
        //redirect ke halaman index periode
        return redirect()->route('periode.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periode $periode)
    {
        $periode->delete();
        return redirect()->route('periode.index')->with('success', 'Data Periode berhasil dihapus');
    }
}
