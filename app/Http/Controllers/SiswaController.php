<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datasiswa = siswas::all();

        return view ('welcome',compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        siswas::create([
            'Nama' => $request->Nama,
            'NoHp' => $request->NoHp,
            'Sekolah' => $request->Sekolah,
        ]);

        return redirect('/welcome')->with('toast_succes','Data Berhasil Ditambah');
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
        $sis = siswas::findorfail($id);
        return view ('Edit',compact('sis'));
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
        $sis = siswas::findorfail($id);
        $sis->update($request->all());

        return redirect('/welcome')->with('toast_succes','Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis = siswas::findorfail($id);
        $sis->delete();
        return back(); 
    }
}
