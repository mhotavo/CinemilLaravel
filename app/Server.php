<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    //

	protected $table="servidor";

	protected $fillable=['id_servidor', 'nom_servidor'];
}
