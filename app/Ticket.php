<?php

namespace App;
use  App\Venta;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable=['venta_id','estado'];

    public function venta(){
        return $this->belongsTo(Venta::class,'venta_id');
    }
}