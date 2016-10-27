<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Movie extends Model
{
	use Sluggable;
    //
	protected $table="pelicula";

	protected $fillable =['id', 'titulo_oficial', 'titulo_latino', 'director', 'reparto', 'id_productora', 'sinopsis', 'id_genero', 'id_pais', 'duracion', 'fecha_estreno', 'idiomas', 'subitulos', 'id_calidad', 'peso', 'id_resolucion', 'trailer', 'portada', 'capturas', 'clasificacion', 'valoracion'];


	public function sluggable()
	{
		return [
		'slug' => [
		'source' => 'titulo_latino'
		]
		];
	}
}
