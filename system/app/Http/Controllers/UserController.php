<?php

namespace App\Http\Controllers;
use App\models\user;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user = new User;
	    $user->nama =request ('nama'); 
	    $user->username = request ('username'); 
	    $user->email = request ('email'); 
	    $user->password = bcrypt(request ('password'));
	    $user->save();
		
		return redirect('admin/user');
	}
		
	function show(user $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}
	function edit(user $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}
	function update(user $user){
		$user->nama = request('nama'); 
	    $user->username = request('username'); 
	    $user->email = request('email'); 
	    $user->password = bcrypt(request('password'));
	    $user->save();
		
		return redirect('admin/user');
	}
	function destroy(user $user){
		$user->delete();

		return redirect('admin/user');
	}

}