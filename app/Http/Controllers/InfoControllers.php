<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class InfoControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Info/Admin', [
            'info' => Info::orderBy('id', 'ASC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Info/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Info::create([
            'panduan' => $request -> file('panduan') ? $request -> file('panduan') -> store('file-panduan', 'public') : null,
            'kriteria' => $request -> file('kriteria') ? $request -> file('kriteria') -> store('file-kriteria', 'public') : null,
            'permohonan' => $request -> file('permohonan') ? $request -> file('permohonan') -> store('file-permohonan', 'public') : null,
            'rekom' => $request -> file('rekom') ? $request -> file('rekom') -> store('file-rekom', 'public') : null,
        ]);

        return Redirect::route('info.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Info::find($id);
        return Inertia::render('Welcome', [
            'welcome' => $user
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
        $info = Info::find($id);
        return Inertia::render('Info/Edit', [
            'info' => $info
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        $request->validate([
            'panduan' => ['nullable', 'file'],
            'kriteria' => ['nullable', 'file'],
            'permohonan' => ['nullable', 'file'],
            'rekom' => ['nullable', 'file'],
        ]);

        if($request->file('panduan')){
            $info->update(['panduan' => $request->file('panduan')->store('file-panduan')]);
        };
        if($request->file('kriteria')){
            $info->update(['kriteria' => $request->file('kriteria')->store('file-kriteria')]);
        };
        if($request->file('permohonan')){
            $info->update(['permohonan' => $request->file('permohonan')->store('file-permohonan')]);
        };
        if($request->file('rekom')){
            $info->update(['rekom' => $request->file('rekom')->store('file-rekom')]);
        };

        return Redirect::route('info.index');
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
