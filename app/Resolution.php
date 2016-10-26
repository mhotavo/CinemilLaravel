<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Resolution extends Model
{
    //

	protected $table="resolucion";

	protected $fillable=['ID_RESOLUCION', 'NOM_RESOLUCION'];
}
