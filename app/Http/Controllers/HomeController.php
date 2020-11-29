<?php

namespace App\Http\Controllers;

/**
 * 
 */
class HomeController extends Controller{
	
	function showAdmin(){
		return view('admin.admin');
	}
	function showBeranda(){
		return view('beranda');
	}
	function showArtikel(){
		return view('artikel');
	}
	function showKomen(){
		return view('komen');
	}
}