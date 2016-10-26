<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    //
	protected $table="enlace";

	protected $fillable=['ID_ENLACE', 'TIPO_ENLACE', 'ID_PELICULA', 'ID_SERVIDOR', 'ID_FUENTE', 'ENLACE'];
}
