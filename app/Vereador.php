<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vereador extends Model
{
    protected $table = 'vereador';

    protected $fillable = array('nome', 'idade' , 'mandatos', 'partido');
}
