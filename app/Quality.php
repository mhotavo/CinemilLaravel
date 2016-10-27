<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    //
	protected $table="calidad";

	protected $fillable=['id_calidad', 'nom_calidad'];
}
