<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'result';
    protected $fillable = ['rating','comment','rated_at','updated_at','create_at','formId'];
}
