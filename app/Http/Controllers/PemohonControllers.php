<?php

namespace App\Http\Controllers;

use App\Models\Andalalin;
use App\Models\Tracking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class PemohonControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $role = Auth::user()->role;
        $user = Andalalin::with('user')->where('user_id', Auth::user()->id)->count();

        if($role == 'admin')
        {
            return Inertia::render('Admin/Index');
        }
        elseif($user >= 1)
        {
            return Inertia::render('Pemohon/Index', [
                'andal' => Andalalin::when($request->term, function ($query, $term){
                    $query->where('nama_pemohon', 'LIKE', '%'.$term.'%');
                })->with('tracking')->where('user_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(3)
            ]);
        }
        else
        {
            return Inertia::render('Dashboard');

        }
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $andal = Andalalin::with('tracking')->find($id);
        return Inertia::render('Pemohon/Show', [
            'andal' => $andal,
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
        $andalalin = Andalalin::find($id);
        return Inertia::render('Pemohon/Edit', [
            'andalalin' => $andalalin
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

        if($request->file('surat_pemohon')){
            Andalalin::where('id', $id)->update([
                'surat_pemohon' => $request->file('surat_pemohon')? $request -> file('surat_pemohon')->store('surat_pemohon'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('ktp')){
            Andalalin::where('id', $id)->update([
                'ktp' => $request->file('ktp')? $request -> file('ktp')->store('ktp'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('sertifikat_tanah')){
            Andalalin::where('id', $id)->update([
                'sertifikat_tanah' => $request->file('sertifikat_tanah')? $request -> file('sertifikat_tanah')->store('sertifikat_tanah'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('ktr')){
            Andalalin::where('id', $id)->update([
                'ktr' => $request->file('ktr')? $request -> file('ktr')->store('ktr'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('rencana_tapak')){
            Andalalin::where('id', $id)->update([
                'rencana_tapak' => $request->file('rencana_tapak')? $request -> file('rencana_tapak')->store('rencana_tapak'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('desain_bangunan')){
            Andalalin::where('id', $id)->update([
                'desain_bangunan' => $request->file('desain_bangunan')? $request -> file('desain_bangunan')->store('desain_bangunan'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('company_profile')){
            Andalalin::where('id', $id)->update([
                'company_profile' => $request->file('company_profile')? $request -> file('company_profile')->store('company_profile'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('sertifikat_penyusun')){
            Andalalin::where('id', $id)->update([
                'sertifikat_penyusun' => $request->file('sertifikat_penyusun')? $request -> file('sertifikat_penyusun')->store('sertifikat_penyusun'):null,
                'tracking_id' => 9
            ]);
        };
        if($request->file('dokumen_andalalin')){
            Andalalin::where('id', $id)->update([
                'dokumen_andalalin' => $request->file('dokumen_andalalin')? $request -> file('dokumen_andalalin')->store('dokumen_andalalin'):null,
                'tracking_id' => 9
            ]);
        };

        return Inertia::render('Pemohon/Store');
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
