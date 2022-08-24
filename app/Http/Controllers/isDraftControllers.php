<?php

namespace App\Http\Controllers;

use App\Models\Andalalin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class isDraftControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $draft = Andalalin::find($id);
        return Inertia::render('Andalalin/Show', [
            'draft' => $draft
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $draft = Andalalin::find($id);
        return Inertia::render('isDraft/Edit', [
            'draft' => $draft
        ]);
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
        $request->validate([
            'keterangan' => 'nullable',
            'nama_pemohon' => 'nullable',
            'alamat_pemohon' => 'nullable',
            'no_tlp' => 'nullable',
            'jenis_usaha' => 'nullable',
            'alamat_usaha' => 'nullable',
            'luas_lahan' => 'nullable',
            'luas_bangunan' => 'nullable',
            'status_lahan' => 'nullable',
            'kapasitas' => 'nullable',
            'email_pemohon' => 'nullable',
            'isDraft' => 'nullable',
            'nama_kategori' => 'nullable',
            'surat_pemohon' => ['nullable', 'file'],
            'ktp' => ['nullable', 'file'],
            'sertifikat_tanah' => ['nullable', 'file'],
            'ktr' => ['nullable', 'file'],
            'rencana_tapak' => ['nullable', 'file'],
            'desain_bangunan' => ['nullable', 'file'],
            'company_profile' => ['nullable', 'file'],
            'sertifikat_penyusun' => ['nullable', 'file'],
            'dokumen_andalalin' => ['nullable', 'file'],
        ]);

        if ($request->input('isDraft') == 1) {
            Andalalin::where('id', $id)->update([
                'tracking_id' => 10
            ]);
        } else{
            Andalalin::where('id', $id)->update([
                'tracking_id' => 1
            ]);
        };

        Andalalin::where('id', $id)->update([
            'nama_pemohon' => $request->nama_pemohon,
            'nama_kategori' => $request->nama_kategori,
            'alamat_pemohon' => $request->alamat_pemohon,
            'no_tlp' => $request->no_tlp,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'luas_lahan' => $request->luas_lahan,
            'luas_bangunan' => $request->luas_bangunan,
            'status_lahan' => $request->status_lahan,
            'kapasitas' => $request->kapasitas,
            'email_pemohon' => $request->email_pemohon,
            'isDraft' => $request->isDraft,
            // 'surat_pemohon' => $request->file('surat_pemohon') ? $request->file('surat_pemohon')->store('surat_pemohon') : null,
            // 'ktp' => $request->file('ktp') ? $request->file('ktp')->store('ktp') : null,
            // 'sertifikat_tanah' => $request->file('sertifikat_tanah')? $request -> file('sertifikat_tanah')->store('sertifikat_tanah'):null,
            // 'ktr' => $request->file('ktr')? $request -> file('ktr')->store('ktr'):null,
            // 'rencana_tapak' => $request->file('rencana_tapak')? $request -> file('rencana_tapak')->store('rencana_tapak'):null,
            // 'desain_bangunan' => $request->file('desain_bangunan')? $request -> file('desain_bangunan')->store('desain_bangunan'):null,
            // 'company_profile' => $request->file('company_profile')? $request -> file('company_profile')->store('company_profile'):null,
            // 'sertifikat_penyusun' => $request->file('sertifikat_penyusun')? $request -> file('sertifikat_penyusun')->store('sertifikat_penyusun'):null,
            // 'dokumen_andalalin' => $request->file('dokumen_andalalin')? $request -> file('dokumen_andalalin')->store('dokumen_andalalin'):null
        ]);

        if($request->file('surat_pemohon')){
            Andalalin::where('id', $id)->update([
                'surat_pemohon' => $request -> file('surat_pemohon')->store('surat_pemohon'),
            ]);
        };
        if($request->file('ktp')){
            Andalalin::where('id', $id)->update([
                'ktp' => $request -> file('ktp')->store('ktp'),
            ]);
        };
        if($request->file('sertifikat_tanah')){
            Andalalin::where('id', $id)->update([
                'sertifikat_tanah' => $request -> file('sertifikat_tanah')->store('sertifikat_tanah'),
            ]);
        };
        if($request->file('ktr')){
            Andalalin::where('id', $id)->update([
                'ktr' => $request -> file('ktr')->store('ktr'),
            ]);
        };
        if($request->file('rencana_tapak')){
            Andalalin::where('id', $id)->update([
                'rencana_tapak' => $request -> file('rencana_tapak')->store('rencana_tapak'),
            ]);
        };
        if($request->file('desain_bangunan')){
            Andalalin::where('id', $id)->update([
                'desain_bangunan' => $request -> file('desain_bangunan')->store('desain_bangunan'),
            ]);
        };
        if($request->file('company_profile')){
            Andalalin::where('id', $id)->update([
                'company_profile' => $request -> file('company_profile')->store('company_profile'),
            ]);
        };
        if($request->file('sertifikat_penyusun')){
            Andalalin::where('id', $id)->update([
                'sertifikat_penyusun' =>  $request -> file('sertifikat_penyusun')->store('sertifikat_penyusun'),
            ]);
        };
        if($request->file('dokumen_andalalin')){
            Andalalin::where('id', $id)->update([
                'dokumen_andalalin' => $request -> file('dokumen_andalalin')->store('dokumen_andalalin'),
            ]);
        };

        return Redirect::route('redirects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
