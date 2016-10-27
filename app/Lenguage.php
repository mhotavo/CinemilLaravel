<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Lenguage extends Model
{
    //
	protected $table="idioma";

	protected $fillable=['id_idioma', 'nom_idioma'];
}
