<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiftConstruct extends Model
{
	protected $fillable = [
		'btn_headline',
		'bg_btn',
		'color_gift',
		'stap_one_headline',
		'stap_one_bg',
		'stap_one_post',
		'stap_one_btn_text',
		'stap_one_btn',
	];
}
