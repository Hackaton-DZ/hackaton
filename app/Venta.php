<?php

namespace App;
use App\Ticket;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table ="ventas";
    protected $fillable=['id','trnTechKey','dcompra','nterminal','nsecuencia',
                           'orgLvlNumber','prdUpc','prdLvlNumber','prdFullName',
                           'qcantidad','mventa','documento','apellidos',
                           'nombreCliente'] ;
                        
    public function  ticket(){
            return $this->hasOne(Ticket::class);
  
    }
}
