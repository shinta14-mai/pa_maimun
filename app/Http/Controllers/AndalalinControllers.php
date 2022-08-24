<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Andalalin;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class AndalalinControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('Andalalin/Index', [
            'andal' => Andalalin::when($request->term, function ($query, $term){
                $query->where('nama_pemohon', 'LIKE', '%'.$term.'%')
                ->orWhere('jenis_usaha', 'LIKE', '%'.$term.'%')
                ->orWhere('kode', 'LIKE', '%'.$term.'%')
                ->orWhere('alamat_usaha', 'LIKE', '%'.$term.'%');
            })->orderBy('id', 'DESC')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
