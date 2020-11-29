<?php 
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
class UserController extends Controller{
	function index(){
		$data['list_user'] = User::withCount('artikel')->get();

		return view('user.index', $data);
	}
	function create(){
		return view('user.create');
	}
	function store(){
		$user = new User;
		$user->nama = request ('nama');
		$user->username = request ('username');
		$user->email = request ('email');
		$user->password = bcrypt(request ('password'));
		$user->save();
			
		$UserDetail = new UserDetail;
		$UserDetail->id_user = $user->id;
		$UserDetail->no_handphone = request('no_handphone');
		$UserDetail->save();
			return redirect('user')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(User $user){
		$data['user'] = $user;
		return view('user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('user.edit', $data);
	}
	function update(User $user){
	
		$user->nama = request ('nama');
		$user->username = request ('username');
		$user->email = request ('email');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->save();
		return redirect('user')->with('success','Data Berhasil Diedit');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('user')->with('danger','Data Berhasil Dihapus');

	}
	function filter(){
		$nama = request('nama');
		$data['list_user'] = User::where('nama', 'like', "%$nama%")->get();
		$data['nama'] = $nama;
		return view('user.index', $data);
	}
}