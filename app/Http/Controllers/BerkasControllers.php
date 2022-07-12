<?php

namespace App\Http\Controllers;

use App\Models\Andalalin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class BerkasControllers extends Controller
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
        //
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
        return Inertia::render('Berkas/Edit', [
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
            'undangan_rapat' => ['nullable', 'file'],
            'surat_pernyataan' => ['nullable', 'file'],
            'surat_rekom' => ['nullable', 'file'],
        ]);

        if($request->file('undangan_rapat')){
            Andalalin::where('id', $id)->update([
                'undangan_rapat' => $request->file('undangan_rapat')? $request -> file('undangan_rapat')->store('unggah-undangan_rapat'):null,
                'tracking_id' => $request->tracking_id,
            ]);
        };
        if($request->file('surat_pernyataan')){
            Andalalin::where('id', $id)->update([
                'surat_pernyataan' => $request->file('surat_pernyataan')? $request -> file('surat_pernyataan')->store('unggah-surat_pernyataan'):null,
                'tracking_id' => $request->tracking_id,
            ]);
        };
        if($request->file('surat_rekom')){
            Andalalin::where('id', $id)->update([
                'surat_rekom' => $request->file('surat_rekom')? $request -> file('surat_rekom')->store('unggah-surat_rekom'):null,
                'tracking_id' => $request->tracking_id,
            ]);
        };

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
