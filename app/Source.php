<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    //
	protected $table="fuente";

	protected $fillable=['ID_FUENTE', 'NOM_FUENTE'];
}
