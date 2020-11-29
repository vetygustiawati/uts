<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * 
 */
class Artikel extends Model{
	
	Protected $table = 'artikel';

	function penulis(){
		return $this->belongsTo(User::class, 'id_user');
	}
}