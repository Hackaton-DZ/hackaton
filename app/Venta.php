<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table ="ventas";
    protected $fillable=['id','trnTechKey','dcompra','nterminal','nsecuencia',
                           'orgLvlNumber','prdUpc','prdLvlNumber','prdFullName',
                           'qcantidad','mventa','documento','apellidos',
                           'nombreCliente'] ;
}
