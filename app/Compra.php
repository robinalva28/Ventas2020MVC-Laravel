<?php

namespace App;
use App\Producto;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';
    protected $primaryKey = 'comId';
    //protected $guarded = [];
    protected $fillable = ['comVendedor', 'comIdProducto','comStock','comPrecio','infoAdicional'];
    //public $timestamps = false;

    public function getProducto()
    {
        return $this->belongsTo('App\Producto', 'comIdProducto', 'prdId');
    }
}
