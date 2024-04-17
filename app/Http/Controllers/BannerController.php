<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Banner';
        $banners = Banner::oldest()->paginate(5);

        return view('admin.banner.index', compact('title', 'banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Tambah Banner';
        return view('admin.banner.create',  compact('title'));
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
        ]);

        $image = $request->file('image');
        $image->storeAs('public/banner', $image->hashName());

        Banner::create([
            'image' => $image->hashName()
        ]);

        return redirect()->route('banner.index')->with(['success' => 'Data berhasil disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $title = 'Tampilkan Banner';
        $banner = Banner::findOrFail($id);

        return view('admin.banner.show', compact('banner', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = 'Edit Banner';
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner', 'title'));
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
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/banner/', $image->hashName());

            Storage::delete('public/banner/' . $banner->image);

            $banner->update([
                'image' => $image->hashName()
            ]);
        } 

        return redirect()->route('banner.index')->with(['success' => 'Data berhasil diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::delete('public/banner/' . $banner->image);
        $banner->delete();

        return redirect()->route('banner.index')->with(['success' => 'Data berhasil dihapus!']);
    }

    public function toggleStatus($id){
        $banner = Banner::findOrFail($id);
        // dump(!$banner->status); die;
        $banner->status = !$banner->status;
        $banner->save();
        

        return redirect()->route('banner.index')->with(['success' => 'Status banner berhasil diubah!']);
    }
}
