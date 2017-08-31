<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;

class Post extends BaseModel
{
    //
	protected $table = 'posts';

	public static $rules = [
		'title' => 'required|max:100',
		'url' => 'required|url',
		'content' => 'required'
	];

}
