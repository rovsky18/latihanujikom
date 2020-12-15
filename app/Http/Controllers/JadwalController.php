<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('jadwal.create', compact('dosen'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'matkul'=>'required',
            'hari'=>'required',
            'dosen'=>'required',
            'kelas'=>'required'
        ]);

        $ruangan= 'R.'.$request->kelas;
        Jadwal::create([
            'matkul'=>$request->matkul,
            'hari'=>$request->hari,
            'dosen'=>$request->dosen,
            'kelas'=>$ruangan
        ]);
        return redirect('jadwal')->with('pesan', 'jadwal berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        $dosen = Dosen::all();
        return view('jadwal.edit', compact('jadwal', 'dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        Jadwal::where('id', $jadwal->id)
        ->update([
            'matkul'=>$request->matkul,
            'hari'=>$request->hari,
            'dosen'=>$request->dosen,
            'kelas'=>$request->kelas
        ]);
        return redirect('jadwal')->with('pesan', 'jadwal berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);
        return redirect('jadwal')->with('pesan', 'jadwal berhasil dihapus');
    }
}
