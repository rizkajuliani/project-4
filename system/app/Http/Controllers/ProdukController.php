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
		
		return redirect('admin/produk');
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
		
		return redirect('admin/produk');
	}
	function destroy(produk $produk){
		$produk->delete();

		return redirect('admin/produk');
	}
	function filter(produk $produk){
		$nama = request('nama');
		$stok = explode(",", request('stok'));

		 
		
		//$data['list_produk'] = produk::where('nama','like',  "%$nama%")->get();
        //$data['list_produk'] = produk::whereIn('stok',  $stok)->get();
		//$data['list_produk'] = produk::whereBetween('harga',  $harga_min, $harga_max)->get();
		//$data['list_produk'] = produk::whereNot('nama','like',  "%$nama%")->get();
        //$data['list_produk'] = produk::whereIn('stok',  $stok)->get();
		//$data['list_produk'] = produk::whereBetween('harga',  $harga_min, $harga_max)->get();
		$data['nama'] = $nama;
		$data['stok'] = request('stok');


		return view('produk.index', $data);
	}

}