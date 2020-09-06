<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $primaryKey = 'venId';
    //protected $guarded = [];
    protected $fillable = ['venNombreComprador','venStock', 'venIdProducto','venPrecio'/*,'venCuotas'*/];
    public $timestamps = false;

}
