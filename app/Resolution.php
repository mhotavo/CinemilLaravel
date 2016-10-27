<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    //

	protected $table="resolucion";

	protected $fillable=['id_resolucion', 'nom_resolucion'];
}
