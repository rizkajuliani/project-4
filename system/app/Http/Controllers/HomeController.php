<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showberanda (){
		return view ('beranda');
	}

	function showproduk (){
		return view ('produk');
	}

	function showtable (){
		return view ('table');
	}

	function showicon (){
		return view ('icon');
	}
}
