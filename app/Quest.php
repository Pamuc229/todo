<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
		protected $fillable = [
			'user_id', 
			'quest'
		]; 
		protected $hidden = [
			'password', 'remember_token',
		];
}
