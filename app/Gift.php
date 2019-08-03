<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
	protected $fillable = ['title'];

	public function project()
	{
		return $this->belongsTo(Projects::class);
	}
}

