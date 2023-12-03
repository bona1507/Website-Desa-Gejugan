<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $data = [
            "dataUmkm" => Umkm::all()
        ];
        return view('adminlte.umkm', $data);
    }

    public function indexHome()
    {
        $data = [
            "dataUmkm" => Umkm::where('status', 1)->get()
        ];
        return view('Umkm.data-umkm', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputUmkm = new Umkm;

        $fileThumbnail = $request->file('fileThumbnail');
        $tujuan_upload = 'storage/thumbnail';
        $fileThumbnail->move($tujuan_upload, $fileThumbnail->getClientOriginalName());

        $inputUmkm->foto_thumbnail = $fileThumbnail->getClientOriginalName();
        $inputUmkm->nama_umkm = $request->input('namaUMKM');
        $inputUmkm->nama_pemilik = $request->input('namaPemilik');
        $inputUmkm->alamat_usaha = $request->input('alamatUsaha');
        $inputUmkm->no_hp = $request->input('noHP');
        $inputUmkm->deskripsi_usaha = $request->input('deskripsiUsaha');
        $inputUmkm->status = 0;

        $inputUmkm->save();
        return redirect('/data-umkm')->with('success', 'Buku berhasil ditambahkan');
    }

    public function accept($id)
    {
        $umkm = Umkm::find($id);
        $umkm->status = 1;
        $umkm->save();

        return redirect('/umkm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */     
    public function destroy(string $id)
    {
        //
    }

    public function detail($nama_umkm)
    {
        $data = [
            'umkm' => Umkm::where('nama_umkm', $nama_umkm)->first()
        ];
        return view('Umkm.detail-umkm', $data);
    }
}
