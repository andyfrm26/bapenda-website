<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Artikel;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Artikel';
        $artikels = Artikel::latest()->paginate(10);

        return view('admin.artikel.index', compact('title', 'artikels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Artikel';
        return view('admin.artikel.create',  compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/artikel', $image->hashName());

        // Tagify (JSON) to string comma separated
        $temp_tags = json_decode($request->tags, true);
        $tags = "";
        foreach ($temp_tags as $tag => $value) {
            $tags = (empty($tags)) ? '' : $tags . ', ';
            $tags .= $value['value'];
        }

        Artikel::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'tags' => $tags,
        ]);

        return redirect()->route('artikel.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Tampilkan Artikel';
        $artikel = Artikel::findOrFail($id);

        return view('admin.artikel.show', compact('artikel', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Artikel';
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel', 'title'));
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
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $artikel = Artikel::findOrFail($id);

        // Tagify (JSON) to string comma separated
        $temp_tags = json_decode($request->tags, true);
        $tags = "";
        foreach ($temp_tags as $tag => $value) {
            $tags = (empty($tags)) ? '' : $tags . ', ';
            $tags .= $value['value'];
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/artikel/', $image->hashName());

            Storage::delete('public/artikel/' . $artikel->image);

            $artikel->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
                'tags' => $tags,
            ]);
        } else {
            $artikel->update([
                'title' => $request->title,
                'content' => $request->content,
                'tags' => $tags,
            ]);
        }

        return redirect()->route('artikel.index')->with(['success' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::delete('public/artikel/' . $artikel->image);
        $artikel->delete();

        return redirect()->route('artikel.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
