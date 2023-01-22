<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Padi;
use App\Http\Controllers\DB;

class PadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Padi::all();
        return view('pages.home', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create');
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
        $this->validate($request, [
            'varietas' => 'required|unique:padi',
            'berat' => 'required',
            'umur' => 'required',
            'pencegahan' => 'required',
            'hasil_sebelum' => 'required'
        ]);
        Padi::create([
            'varietas' => $request->varietas,
            'bentuk_gabah' => $request->bentuk_gabah,
            'bentuk_tanaman' => $request->bentuk_tanaman,
            'berat' => $request->berat,
            'daun_bendera' => $request->daun_bendera,
            'tekstur_nasi' => $request->tekstur_nasi,
            'umur' => $request->umur,
            'hama' => $request->hama,
            'pencegahan' => $request->pencegahan,
            'hasil_sebelum' => $request->hasil_sebelum,
            'hasil_terkena' => $request->hasil_terkena
        ]);

        return redirect()->route('padi.index');
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
        $padi = Padi::find($id);
        return view('pages.detail', compact('padi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $padi = Padi::find($id);
        return view('pages.edit', compact('padi'));
        // return dd($data);
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
        //
        $this->validate($request, [
            'varietas' => 'required',
            'berat' => 'required',
            'umur' => 'required',
            'pencegahan' => 'required',
            'hasil_sebelum' => 'required'
        ]);
        $padi = Padi::find($id);
        $padi->varietas = $request->varietas;
        $padi->bentuk_gabah = $request->bentuk_gabah;
        $padi->bentuk_tanaman = $request->bentuk_tanaman;
        $padi->berat = $request->berat;
        $padi->daun_bendera = $request->daun_bendera;
        $padi->tekstur_nasi = $request->tekstur_nasi;
        $padi->umur = $request->umur;
        $padi->hama = $request->hama;
        $padi->pencegahan = $request->pencegahan;
        $padi->hasil_sebelum = $request->hasil_sebelum;
        $padi->hasil_terkena = $request->hasil_terkena;
        $padi->save();

        return redirect()->route('padi.index');
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
        $padi = Padi::find($id);
        $padi->delete();
        return redirect()->route('padi.index');
    }

    public function dashboard(){
        //
        $datas = Padi::all();
        return view('pages.dashboard', compact('datas'));
    }
    public function search(Request $request){
        //
        $search = $request -> search;
        $datas = Padi::where('varietas', 'like', '%'.$search.'%')->get();
        // return dd($search);
        return view('pages.search', compact('datas'));
    }
}
