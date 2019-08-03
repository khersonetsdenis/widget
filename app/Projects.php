<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
	protected $casts = [
		'is_done' => 'boolean'
	];

	protected $fillable = [
		'title',
		'site',
		'headline_btn',
		'background_btn',
		'color_gift_btn',
		'headline_stap_one',
		'background_stap_one',
		'post_url_stap_one',
		'text_btn_stap_one',
		'color_btn_stap_one',
	];

	public function gifts()
	{
		return $this->hasMany(Gift::class, 'project_id');
	}
}
