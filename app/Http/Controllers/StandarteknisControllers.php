<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Standartek;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class StandarteknisControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('Rekom Teknis/Index', [
            'andal' => Standartek::when($request->term, function($query, $term,){
                $query->where('kode', 'LIKE', '%'.$term.'%');
            })->orderBy('id', 'DESC')->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('StandarTeknis/Create');
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
            'nama_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'no_tlp' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'luas_lahan' => 'required',
            'luas_bangunan' => 'required',
            'status_lahan' => 'required',
            'kapasitas' => 'required',
            'email_pemohon' => 'required',

        ]);

        $file1 = $request->surat_pemohon;
        $file2 = $request->ktp;
        $file3 = $request->sertifikat_tanah;
        $file4 = $request->ktr;
        $file5 = $request->rencana_tapak;
        $file6 = $request->desain_bangunan;

        $surat_pemohon = $file1->getClientOriginalName();
        $ktp = $file2->getClientOriginalName();
        $sertifikat_tanah = $file3->getClientOriginalName();
        $ktr = $file4->getClientOriginalName();
        $rencana_tapak = $file5->getClientOriginalName();
        $desain_bangunan = $file6->getClientOriginalName();

        $upload = new Standartek();
        $upload->nama_pemohon = $request->nama_pemohon;
        $upload->alamat_pemohon = $request->alamat_pemohon;
        $upload->no_tlp = $request->no_tlp;
        $upload->jenis_usaha = $request->jenis_usaha;
        $upload->alamat_usaha = $request->alamat_usaha;
        $upload->luas_lahan = $request->luas_lahan;
        $upload->luas_bangunan = $request->luas_bangunan;
        $upload->status_lahan = $request->status_lahan;
        $upload->kapasitas = $request->kapasitas;
        $upload->email_pemohon = $request->email_pemohon;
        $upload->surat_pemohon = $surat_pemohon;
        $upload->ktp = $ktp;
        $upload->sertifikat_tanah = $sertifikat_tanah;
        $upload->ktr = $ktr;
        $upload->rencana_tapak = $rencana_tapak;
        $upload->desain_bangunan = $desain_bangunan;
        $upload->verifikasi = 'Diperiksa';

        $characters = '0123456789';
        $charactersNumber = strlen($characters);

        $code = '';

        while (strlen($code) < 4) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }

        if (Standartek::where('kode', $code)->exists()) {
            $this->generateUniqueCode();
        }

        $codeR = 'ST/'.$code.'/'.date("Y/m/d");
        $upload->kode = $codeR;

        $file1->move(public_path('file_pemohon'),$surat_pemohon);
        $file2->move(public_path('file_pemohon'),$ktp);
        $file3->move(public_path('file_pemohon'),$sertifikat_tanah);
        $file4->move(public_path('file_pemohon'),$ktr);
        $file5->move(public_path('file_pemohon'),$rencana_tapak);
        $file6->move(public_path('file_pemohon'),$desain_bangunan);
        $upload->save();

        return Inertia::render('StandarTeknis/Store', [
            'code' => $codeR,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Inertia::render('Andalalin/Show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $andal = Standartek::find($id);
        return Inertia::render('Andalalin/Edit', [
            'andal' => $andal
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
            'nama_pemohon' => 'required',
            'alamat_pemohon' => 'required',
            'no_tlp' => 'required',
            'jenis_usaha' => 'required',
            'alamat_usaha' => 'required',
            'luas_lahan' => 'required',
            'luas_bangunan' => 'required',
            'status_lahan' => 'required',
            'kapasitas' => 'required',
            'email_pemohon' => 'required',
            // 'surat_pemohon' => 'required',
            // 'ktp' => 'required',
            // 'sertifikat_tanah' => 'required',
            // 'ktr' => 'required',
            // 'rencana_tapak' => 'required',
            // 'desain_bangunan' => 'required',
            // 'company_profile' => 'required',
            // 'sertifikat_penyusun' => 'required',
            // 'dokumen_andalalin' => 'required',
        ]);

        Standartek::where('id', $id)->update([
            'nama_pemohon' => $request->nama_pemohon,
            'alamat_pemohon' => $request->alamat_pemohon,
            'no_tlp' => $request->no_tlp,
            'jenis_usaha' => $request->jenis_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'luas_lahan' => $request->luas_lahan,
            'luas_bangunan' => $request->luas_bangunan,
            'status_lahan' => $request->status_lahan,
            'kapasitas' => $request->kapasitas,
            'email_pemohon' => $request->email_pemohon,
            'surat_pemohon' => $request->surat_pemohon,
            'ktp' => $request->ktp,
            'sertifikat_tanah' => $request->sertifikat_tanah,
            'ktr' => $request->ktr,
            'desain_bangunan' => $request->desain_bangunan,
            'company_profile' => $request->company_profile,
            'sertifikat_penyusun' => $request->sertifikat_penyusun,
            'dokumen_andalalin' => $request->dokumen_andalalin,
        ]);

        return Redirect::route('andal.index');
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
