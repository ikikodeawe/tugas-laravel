<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function form(){
    	return view('form');
    }

    public function selamat(Request $request){
    	//dd($request->all());
    	$nama_depan = $request["first_name"];
    	$nama_belakang = $request["last_name"];
    	return view('selamat', ["nama_depan" => $nama_depan], ["nama_belakang" => $nama_belakang]);
    }
}
