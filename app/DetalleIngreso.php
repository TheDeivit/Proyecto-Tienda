<?php

namespace tienda;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table='ingreso';

    protected $primaryKey='iddetalle_ingreso';

    public $timestamps=false;

    protected $fillable = [
    	'idingreso',
    	'idarticulo',
    	'cantidad',
    	'precio_compra',
    	'precio_venta'
    ];

    protected $guarded= [

    ];
}