<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Movie extends Model
{
	use Sluggable;
    //
	protected $table = 'pelicula';


	public function sluggable()
	{
		return [
		'slug' => [
		'source' => 'title'
		]
		];
	}
}
