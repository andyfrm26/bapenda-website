<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class BeritaController extends Controller
{
    public function index()
    {
        $title = 'Berita';
        $beritas = Berita::latest()->paginate(10);

        return view('admin.berita.index', compact('title', 'beritas'));
    }

    public function create()
    {
        $title = 'Tambah Berita';
        return view('admin.berita.create',  compact('title'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/berita', $image->hashName());

        // Tagify (JSON) to string comma separated
        $temp_tags = json_decode($request->tags, true);
        $tags = "";
        foreach ($temp_tags as $tag => $value) {
            $tags = (empty($tags)) ? '' : $tags . ', ';
            $tags .= $value['value'];
        }

        Berita::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'tags' => $tags,
        ]);

        return redirect()->route('berita.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    public function show($id)
    {
        $title = 'Tampilkan Berita';
        $berita = Berita::findOrFail($id);

        return view('admin.berita.show', compact('berita', 'title'));
    }

    public function edit($id)
    {
        $title = 'Edit Berita';
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita', 'title'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
        ]);

        $berita = Berita::findOrFail($id);

        // Tagify (JSON) to string comma separated
        $temp_tags = json_decode($request->tags, true);
        $tags = "";
        foreach ($temp_tags as $tag => $value) {
            $tags = (empty($tags)) ? '' : $tags . ', ';
            $tags .= $value['value'];
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/berita/', $image->hashName());

            Storage::delete('public/berita/' . $berita->image);

            $berita->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
                'tags' => $tags,
            ]);
        } else {
            $berita->update([
                'title' => $request->title,
                'content' => $request->content,
                'tags' => $tags,
            ]);
        }

        return redirect()->route('berita.index')->with(['success' => 'Data berhasil diubah!']);
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        Storage::delete('public/berita/' . $berita->image);
        $berita->delete();

        return redirect()->route('berita.index')->with(['success' => 'Data berhasil dihapus!']);
    }
}
