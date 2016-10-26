<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    //
	protected $table="genero";

	protected $fillable=['ID_GENERO', 'NOM_GENERO'];
}
