<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class kategoriArtikelController extends Controller
{
    public function index(){
    	$KategoriArtikel=KategoriArtikel::all();

    	return view('kategori_artikel.index', compact('KategoriArtikel'));
    }
    public function show($id){
    	$KategoriArtikel=KategoriArtikel::find($id);

    	return view('kategori_artikel.show', compact('KategoriArtikel'));
    }
    public function store(Request $Request){
    	$input=$Request->all();
    	KategoriArtikel::create($input);
    	return redirect(route('kategori_artikel.index'));

    }
    public function create(){
    	return view('kategori_artikel.create');
    }
    
}
