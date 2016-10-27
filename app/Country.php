<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    protected $table="pais";

    protected $fillable=['id_pais', 'nom_pais'];
}
