<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{
	protected $fillable = [
		'name',
		'phone',
		'gift'
	];

	public function user()
	{
		return $this->belongsTo('User');
	}
}
