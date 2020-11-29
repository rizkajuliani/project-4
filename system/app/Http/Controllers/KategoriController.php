<?php

namespace App\Http\Controllers;
use App\models\kategori;

class KategoriController extends Controller {
	function index(){
		$data['list_kategori'] = Kategori::all();
		return view('kategori.index', $data);
	}
	function create(){
		return view('kategori.create');
	}
	function store(){
		$kategori = new Kategori;
	    $kategori->nama =request ('nama'); 

	    $kategori->save();
		
		return redirect('admin/kategori');
	}
		
	function show(kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.show', $data);
	}
	function edit(kategori $kategori){
		$data['kategori'] = $kategori;
		return view('kategori.edit', $data);
	}
	function update(kategori $kategori){
		$kategori->nama = request('nama');
	    $kategori->save();
		
		return redirect('admin/kategori');
	}
	function destroy(kategori $kategori){
		$kategori->delete();

		return redirect('admin/kategori');
	}

}