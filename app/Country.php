<?php

namespace Cinemil;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    protected $table="pais";

    protected $fillable=['ID_PAIS', 'NOM_PAIS'];
}
