<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller

{

  public function index()
  {
    $title = 'Home';
    $active = 'home';
    $content = 'template/template';
    $artikels = Artikel::latest()->filter(request(['cari', 'kategori']))->get();
    return view('home', compact('title', 'active', 'content', 'artikels'));
  }


  public function profile()
  {
    $data['title'] = 'Profile';
    $data['active'] = 'profile';
    $data['content'] = 'template/template';
    return view('profile', $data);
  }

  public function strukturOrganisasi()
  {
    $data['title'] = 'Struktur Organisasi';
    $data['active'] = 'strukturOrganisasi';
    $data['content'] = 'template/template';
    return view('strukturOrganisasi', $data);
  }

  public function daftarKejuruan()
  {
    $data['title'] = 'Daftar Kejuruan';
    $data['active'] = 'daftarKejuruan';
    $data['content'] = 'template/template';
    return view('daftarKejuruan', $data);
  }

  public function pengumuman()
  {
    $data['title'] = 'Pengumuman';
    $data['active'] = 'pengumuman';
    $data['content'] = 'template/template';
    return view('pengumuman', $data);
  }

  public function syaratDanKetentuan()
  {
    $data['title'] = 'Syarat dan Ketentuan';
    $data['active'] = 'syaratDanKetentuan';
    $data['content'] = 'template/template';
    return view('syaratDanKetentuan', $data);
  }

  public function kebijakanPrivasi()
  {
    $data['title'] = 'Kebijakan Privasi';
    $data['active'] = 'kebijakanPrivasi';
    $data['content'] = 'template/template';
    return view('kebijakanPrivasi', $data);
  }

  public function kontak()
  {
    $data['title'] = 'Kontak';
    $data['active'] = 'kontak';
    $data['content'] = 'template/template';
    return view('kontak', $data);
  }

  public function alumni()
  {
    $data['title'] = 'Alumni';
    $data['active'] = 'alumni';
    $data['content'] = 'template/template';
    return view('alumni', $data);
  }

  public function showArtikelDetail(Artikel $artikel)
  {
    $title = $artikel->judul;
    $active = 'home';
    $content = 'template/template';

    // Load the specific artikel along with its kategori
    $artikel = $artikel->load('kategori');

    // Retrieve all categories
    $allCategories = Kategori::all();

    // Retrieve the five most recent articles (excluding the current one if needed)
    $recentArticles = Artikel::where('id', '!=', $artikel->id) // Exclude the current article if desired
      ->latest()
      ->take(5)
      ->get();

    return view('detailArtikel', compact('title', 'active', 'content', 'artikel', 'allCategories', 'recentArticles'));
  }
}
