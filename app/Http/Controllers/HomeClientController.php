<?php

namespace App\Http\Controllers;

/**
 * 
 */
class HomeClientController extends Controller{
	
	function showLayout(){
		return view('admin.layout');
	}
	function showAbout(){
		return view('about');
	}
	function showKomen(){
		return view('komen2');
	}
	function showKontak(){
		return view('kontak');
	}
	function showArtikel(){
		return view('artikel2');
	}
	function showLogin2(){
		return view('login2');
	}
	
	
}