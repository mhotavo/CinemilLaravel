<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Quality extends Model
{
    //
	protected $table="calidad";

	protected $fillable=['ID_CALIDAD', 'NOM_CALIDAD'];
}
