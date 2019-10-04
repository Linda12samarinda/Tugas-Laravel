<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
    	$Artikel=Artikel::all();

    	return view('artikel.index', compact('Artikel'));
    }
    public function show($id){
    	$Artikel=Artikel::find($id);

    	return view('artikel.show', compact('Artikel'));
    }
    public function store(Request $Request){
    	$input=$Request->all();
    	Artikel::create($input);
    	return redirect(route('artikel.index'));

    }
    public function create(){
    	$KategoriArtikel=KategoriArtikel::pluck('nama','id');

    	return view('artikel.create', compact('KategoriArtikel'));
    }
}
