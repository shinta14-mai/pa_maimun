<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Andalalin;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class AndalalinControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Andalalin/Index', [
            'andal' => Andalalin::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Andalalin/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $characters = '0123456789';
        $charactersNumber = strlen($characters);

        $code = '';
        $nama_kategori = $request -> input('nama_kategori');

        while (strlen($code) < 4) {
            $position = rand(0, $charactersNumber - 1);
            $character = $characters[$position];
            $code = $code.$character;
        }

        if (Andalalin::where('kode', $code)->exists()) {
            $this->generateUniqueCode();
        }

        if($nama_kategori == 'Dokumen Andalalin'){
            $codeR = 'RA/'.$code.'/'.date("Y/m/d");
        }
        elseif($nama_kategori == 'Rekomendasi Teknis'){
            $codeR = 'RT/'.$code.'/'.date("Y/m/d");
        }
        elseif($nama_kategori == 'Standar Teknis'){
            $codeR = 'ST/'.$code.'/'.date("Y/m/d");
        }

        Andalalin::insert([
            'user_id' => auth()->id(),
            'tracking_id' => 1,
            'nama_kategori' => $request -> input('nama_kategori'),
            'nama_pemohon' => $request -> input('nama_pemohon'),
            'alamat_pemohon' => $request -> input('alamat_pemohon'),
            'no_tlp' => $request -> input('no_tlp'),
            'jenis_usaha' => $request -> input('jenis_usaha'),
            'alamat_usaha' => $request -> input('alamat_usaha'),
            'luas_lahan' => $request -> input('luas_lahan'),
            'luas_bangunan' => $request -> input('luas_bangunan'),
            'status_lahan' => $request -> input('status_lahan'),
            'kapasitas' => $request -> input('kapasitas'),
            'email_pemohon' => $request -> input('email_pemohon'),
            'kode' => $request -> kode = $codeR,
            'keterangan' => $request -> keterangan = null,
            'surat_pemohon' => $request -> file('surat_pemohon') ? $request -> file('surat_pemohon') -> store('surat-permohonan', 'public') : null,
            'ktp' => $request -> file('ktp') ? $request -> file('ktp') -> store('ktp', 'public') : null,
            'sertifikat_tanah' => $request -> file('sertifikat_tanah') ? $request -> file('sertifikat_tanah') -> store('sertifikat-tanah', 'public') : null,
            'ktr' => $request -> file('ktr') ? $request -> file('ktr') -> store('kesesuaian-tata-ruang', 'public') : null,
            'rencana_tapak' => $request -> file('rencana_tapak') ? $request -> file('rencana_tapak') -> store('rencana-tapak', 'public') : null,
            'desain_bangunan' => $request -> file('desain_bangunan') ? $request -> file('desain_bangunan') -> store('desain-bangunan', 'public') : null,
            'company_profile' => $request -> file('company_profile') ? $request -> file('company_profile') -> store('company-profile', 'public') : null,
            'sertifikat_penyusun' => $request -> file('sertifikat_penyusun') ? $request -> file('sertifikat_penyusun') -> store('sertifikat-penyusun', 'public') : null,
            'dokumen_andalalin' => $request -> file('dokumen_andalalin') ? $request -> file('dokumen_andalalin') -> store('dokumen-andalalin', 'public') : null,
        ]);

        return Inertia::render('Andalalin/Store', [
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
        $user = Andalalin::find($id);
        return Inertia::render('Andalalin/Show', [
            'andal' => $user
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
        $andal = Andalalin::find($id);
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
            'tracking_id' => 'required',
            'keterangan' => 'nullable',
        ]);

        Andalalin::where('id', $id)->update([
            'tracking_id' => $request->tracking_id,
            'keterangan' => $request->keterangan,
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
