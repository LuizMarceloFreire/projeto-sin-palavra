<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctipo extends Model
{
    protected $fillable = [

    	'nomedoc',
        'tipodoc',
        'descricaodoc',
        'obsdocument'
    ];
}
