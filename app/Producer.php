<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    //
	protected $table="productora";

	protected $fillable=['id_productora', 'nom_productora'];
}
