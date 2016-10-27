<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
	protected $table="enlace";

	protected $fillable=['id_enlace', 'tipo_enlace', 'id_pelicula', 'id_servidor', 'id_fuente', 'enlace'];
}
