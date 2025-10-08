<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Blog;
use App\Models\Galeri;
use App\Models\Testimoni;
use App\Models\About;
use App\Models\Banner;
use App\Models\Pesan;

class HomeController extends Controller
{
    public function index()
    {
        $produks = Produk::latest()->take(6)->get();
        $blogs = Blog::latest()->take(3)->get();
        $galeris = Galeri::latest()->take(8)->get();
        $testimonis = Testimoni::latest()->take(3)->get();
        $about = About::first();
        $banners = Banner::orderBy('urutan')->get();
        return view('home.home.index', compact('produks', 'blogs', 'galeris', 'testimonis', 'about', 'banners'));
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subjek' => 'required|string|max:255',
            'isi' => 'required|string|min:5',
        ]);

        Pesan::create($validated);

        return back()->with('success', 'Pesan berhasil dikirim. Terima kasih!');
    }
}
