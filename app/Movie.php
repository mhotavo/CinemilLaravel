<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Movie extends Model
{
	use Sluggable;
    //
	protected $table="pelicula";

	protected $fillable=['ID', 'TITULO_OFICIAL', 'TITULO_LATINO', 'DIRECTOR', 'REPARTO', 'PRODUCTORA', 'SINOPSIS', 'GENERO', 'PAIS', 'DURACION', 'FECHA_ESTRENO', 'IDIOMA', 'SUBTITULOS', 'CALIDAD', 'PESO', 'RESOLUCION', 'TRAILER', 'PORTADA', 'CAPTURAS', 'CLASIFICACION', 'VALORACION', 'FECHA_INGRESO'];


	public function sluggable()
	{
		return [
		'slug' => [
		'source' => 'TITULO_LATINO'
		]
		];
	}
}
