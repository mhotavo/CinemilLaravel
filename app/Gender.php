<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    //
	protected $table="genero";

	protected $fillable=['id_genero', 'nom_genero'];
}
