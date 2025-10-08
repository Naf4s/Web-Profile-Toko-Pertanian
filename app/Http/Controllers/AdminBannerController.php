<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class AdminBannerController extends Controller
{
    public function index() {
        $banners = Banner::orderBy('urutan')->get();
        return view('admin.banner.index', compact('banners'));
    }
    public function create() {
        return view('admin.banner.create');
    }
    public function store(Request $request) {
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable',
            'urutan' => 'nullable|integer',
        ]);
        $data['gambar'] = $request->file('gambar')->store('banner', 'public');
        Banner::create($data);
        return redirect()->route('banner.index')->with('success', 'Banner berhasil ditambahkan.');
    }
    public function edit($id) {
        $banner = Banner::findOrFail($id);
        return view('admin.banner.edit', compact('banner'));
    }
    public function update(Request $request, $id) {
        $banner = Banner::findOrFail($id);
        $data = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'nullable',
            'urutan' => 'nullable|integer',
        ]);
        if ($request->hasFile('gambar')) {
            if ($banner->gambar) Storage::disk('public')->delete($banner->gambar);
            $data['gambar'] = $request->file('gambar')->store('banner', 'public');
        }
        $banner->update($data);
        return redirect()->route('banner.index')->with('success', 'Banner berhasil diupdate.');
    }
    public function destroy($id) {
        $banner = Banner::findOrFail($id);
        if ($banner->gambar) Storage::disk('public')->delete($banner->gambar);
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner berhasil dihapus.');
    }
}
