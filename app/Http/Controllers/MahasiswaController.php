<?php

namespace App\Http\Controllers;

use App\mMahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Mahasiswa/FormBaruMahasiswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function dMahasiswa(){
        $dMahasiswa = mMahasiswa::all();
        return $dMahasiswa;
    }

    public function tabel(){
        $mahasiswa = $this->dMahasiswa();
        return view('Mahasiswa/TabMahasiswa', compact('mahasiswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $mahasiswa = new mMahasiswa();

        $mahasiswa->mhId = $request->nim;
        $mahasiswa->mhNama = $request->namaMahasiswa;
        $mahasiswa->mhAlamat = $request->alamatMahasiswa;
        $mahasiswa->mhJk = $request->jk;
        $mahasiswa->save();

        return redirect()->back()->with('status', 'Berhasil Tersimpan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = mMahasiswa::where('mhId', $id)->first();
        // return $mahasiswa;
        return view('Mahasiswa/FormUbahMahasiswa', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        $updateMahasiswa = mMahasiswa::where('mhId', $id)->first();

        $updateMahasiswa->mhNama = $request->namaMahasiswa;
        $updateMahasiswa->mhAlamat = $request->alamatMahasiswa;
        $updateMahasiswa->mhJk = $request->jk;

        $updateMahasiswa->save();

        $mahasiswa = $this->dMahasiswa();
        return view('Mahasiswa/TabMahasiswa', compact('mahasiswa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteMahasiswa = mMahasiswa::find($id);

        $deleteMahasiswa->delete();

        $mahasiswa = $this->dMahasiswa();

        return view('Mahasiswa/TabMahasiswa', compact('mahasiswa'));
    }
}
