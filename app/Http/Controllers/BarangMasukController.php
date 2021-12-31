<?php

namespace App\Http\Controllers;

use App\Models\barang_masuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_masuk = barang_masuk::All();
        return view('barangmasuk.index', compact('barang_masuk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang_masuk = barang_masuk::all();
        return view('barangmasuk.create', compact('barang_masuk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required',
            'tgl_masuk' => 'required',
        ]);

        $barang_masuk = new barang_masuk;
        $barang_masuk->nama_barang = $request->nama_barang;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->tgl_masuk = $request->tgl_masuk;
        $barang_masuk->save();
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        return view('barangmasuk.show', compact('barang_masuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        return view('barangmasuk.edit', compact('barang_masuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        $barang_masuk->nama_barang = $request->nama_barang;
        $barang_masuk->jumlah = $request->jumlah;
        $barang_masuk->tgl_masuk = $request->tgl_masuk;
        $barang_masuk->save();
        return redirect()->route('barangmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_masuk  $barang_masuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang_masuk = barang_masuk::findOrFail($id);
        $barang_masuk->delete();
        return redirect()->route('barangmasuk.index');
    }
}
