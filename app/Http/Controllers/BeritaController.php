<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

use App\Berita;

class BeritaController extends Controller
{
    public function index(){
    	$Berita=Berita::all();

    	return view('berita.index', compact('Berita'));
    }
    public function show($id){
    	$Berita=Berita::find($id);
    	return view('berita.show', compact('Berita'));
    }
    public function store(Request $Request){
    	$input=$Request->all();
    	Berita::create($input);
    	return redirect(route('berita.index'));

    }
    public function create(){
    	$KategoriBerita=KategoriBerita::pluck('nama','id');

    	return view('berita.create', compact('KategoriBerita'));
    }
}
