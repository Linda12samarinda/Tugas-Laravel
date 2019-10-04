<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
    	$kategori_berita=KategoriBerita::all();

    	return view('kategori_berita.index', compact('kategori_berita'));
	}
	 public function show($id){
    	$KategoriBerita=KategoriBerita::find($id);

    	return view('kategori_berita.show', compact('KategoriBerita'));
    }
    public function store(Request $Request){
    	$input=$Request->all();
    	KategoriBerita::create($input);
    	return redirect(route('kategori_berita.index'));

    }
    public function create(){
    	return view('kategori_berita.create');
    }
}