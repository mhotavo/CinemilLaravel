<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Lenguage extends Model
{
    //
	protected $table="idioma";

	protected $fillable=['ID_IDIOMA', 'NOM_IDIOMA'];
}
