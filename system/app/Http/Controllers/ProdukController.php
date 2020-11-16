<?php

namespace App\Http\Controllers;
use App\models\produk;

class ProdukController extends Controller {
	function index(){
		$data['list_produk'] = produk::all();
		return view('produk.index', $data);
	}
	function create(){
		return view('produk.create');
	}
	function store(){
		$produk = new produk;
	    $produk->nama =request ('nama'); 
	    $produk->harga = request ('harga'); 
	    $produk->berat = request ('berat'); 
	    $produk->deskripsi = request ('deskripsi');
	    $produk->stok = request ('stok'); 
	    $produk->save();
		
		return redirect('produk');
	}
		
	function show(produk $produk){
		$data['produk'] = $produk;
		return view('produk.show', $data);
	}
	function edit(produk $produk){
		$data['produk'] = $produk;
		return view('produk.edit', $data);
	}
	function update(produk $produk){
		$produk->nama = request('nama'); 
	    $produk->harga = request('harga'); 
	    $produk->berat = request('berat'); 
	    $produk->deskripsi = request('deskripsi');
	    $produk->stok = request('stok'); 
	    $produk->save();
		
		return redirect('produk');
	}
	function destroy(produk $produk){
		$produk->delete();

		return redirect('produk');
	}

}