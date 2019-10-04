<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;

class galeri_controller extends Controller
{
    public function index(){
    	$galeri=galeri::all();

    	return view('galeri.index', compact('galeri'));
    }
    public function show($id){
    	$Galeri=Galeri::find($id);
    	return view('galeri.show', compact('Galeri'));
    }
    public function store(Request $Request){
    	$input=$Request->all();
    	Berita::create($input);
    	return redirect(route('galeri.index'));

    }
    public function create(){
    	$KategoriGaleri=KategoriGaleri::pluck('nama','id');

    	return view('galeri.create', compact('KategoriGaleri'));
}
