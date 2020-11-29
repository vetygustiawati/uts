<?php 
namespace App\Http\Controllers;
use App\Models\Komen;
class KomenController extends Controller{
	function index(){
		$data['list_komen'] = Komen::all();

		return view('komen.index', $data);
	}
	function create(){
		return view('komen.create');
	}
	function store(){
		$komen = new Komen;
		$komen->nama = request ('nama');
		$komen->komentar = request ('komentar');
		$komen->save();
			
			return redirect('komen')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(Komen $komen){
		$data['komen'] = $komen;
		return view('komen.show', $data);
	}
	function edit(Komen $komen){
		$data['komen'] = $komen;
		return view('komen.edit', $data);
	}
	function update(Komen $komen){
	
		$komen->nama = request ('nama');
		$komen->komentar = request ('komentar');
		$komen->save();
			
		return redirect('komen')->with('success','Data Berhasil Diedit');
	}
	function destroy(Komen $komen){
		$komen->delete();

		return redirect('komen')->with('danger','Data Berhasil Dihapus');

	}
	function filter(){
		$nama = request('nama');
		$data['list_komen'] = Komen::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('komen.index', $data);
	}
}