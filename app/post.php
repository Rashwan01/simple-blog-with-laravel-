<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
	protected $fillable= [
		"owner_id","title","body"
	];
}
