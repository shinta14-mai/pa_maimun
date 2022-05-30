<?php

namespace App\Http\Controllers;

use App\Models\Andalalin;
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

    public function index()
    {
        $role = Auth::user()->role;
        $andal = Andalalin::with('user')->where('user_id', Auth::user()->id)->get();
        $user = Andalalin::with('user')->where('user_id', Auth::user()->id)->count();

        if($role == 'admin')
        {
            return Inertia::render('Admin/Index', [
                'andal' => Andalalin::orderBy('id', 'DESC')->get()
            ]);
        }
        elseif($user >= 1)
        {
            return Inertia::render('Pemohon/Index', [
                'andal' => $andal
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
        $andal = Andalalin::with('user')->where('user_id', Auth::user()->id)->get();
        return Inertia::render('Pemohon/Show', [
            'andal' => $andal
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
        $user = Andalalin::find($id);
        return Inertia::render('Pemohon/Edit', [
            'andal' => $user
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
