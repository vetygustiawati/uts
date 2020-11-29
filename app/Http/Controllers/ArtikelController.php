<?php
namespace App\Http\Controllers;
use App\Models\Artikel;
class ArtikelController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_artikel'] = $user->artikel;

		return view('artikel.index', $data);
	}
	function create(){
		return view('artikel.create');
	}
	function store(){
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request ('judul');
		$artikel->konten = request ('konten');
		$artikel->tanggal = request ('tanggal');
		$artikel->save();
			
			return redirect('artikel')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.show', $data);
	}
	function edit(Artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.edit', $data);
	}
	function update(Artikel $artikel){
	
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request ('judul');
		$artikel->konten = request ('konten');
		$artikel->tanggal = request ('tanggal');
		$artikel->tags = request ('tags');
		$artikel->save();
			
		return redirect('artikel')->with('success','Data Berhasil Diedit');
	}
	function destroy(Artikel $artikel){
		$artikel->delete();

		return redirect('artikel')->with('danger','Data Berhasil Dihapus');

	}
	function filter() {
		$tanggal = request('tanggal');
		$judul = request('judul');
		$tags = request ('tags');
		$data['list_artikel'] = Artikel::where('tanggal', 'like', "%$tanggal%")->get();
		$data['list_artikel'] = Artikel::where('judul', 'like', "%$judul%")->get();
		$data['list_artikel'] = Artikel::where('tags', 'like', "%$tags%")->get();
		$data['tanggal'] = $tanggal;
		$data['judul'] = $judul;
		$data['tags'] = $tags;
		

		return view('artikel.index', $data);
	}
}