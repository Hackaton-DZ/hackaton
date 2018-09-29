<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    protected $fillable=['ticket_id','estado'];
}
