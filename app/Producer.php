<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    //
	protected $table="productora";

	protected $fillable=['ID_PRODUCTORA', 'NOM_PRODUCTORA'];
}
