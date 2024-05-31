<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use App\Models\Kategori;
use App\Models\Lokasi;
use App\Models\Event;

use Illuminate\Http\Request;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisata = Wisata::all();
        return view('wisatas.index', compact('wisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisatas.create', compact('kategori','lokasi','event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wisata = new Wisata;
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->cover = $request->cover;
        $wisata->id_event = $request->id_event;

        if ($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/wisata', $name);
            $wisata->cover = $name;
        }

        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('wisatas.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        $kategori = Kategori::all();
        $lokasi = Lokasi::all();
        $event = Event::all();
        return view('wisatas.edit', compact('wisata','kategori','lokasi','event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->nama_wisata = $request->nama_wisata;
        $wisata->id_kategori = $request->id_kategori;
        $wisata->id_lokasi = $request->id_lokasi;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->id_event = $request->id_event;

        if ($request->hasFile('cover')){
            $product->deleteImage();
            $img = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('images/wisata', $name);
            $product->cover = $name;
        }
        $wisata->save();
        return redirect()->route('wisata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        $wisata->delete();
        return redirect()->route('wisata.index');
    }
}
 