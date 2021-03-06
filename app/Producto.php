<?php

namespace App;

use App\Venta;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'prdId';
    //protected $guarded = [];
    protected $fillable = ['prdNombre', 'prdDescripcion','prdUnidVen','prdPrecio','prdStock'];
    public $timestamps = false;

    public function getVenta()
    {
        return $this->belongsTo('App\Venta', 'prdId', 'venIdProducto');
    }

    public function getCompra()
    {
        return $this->belongsTo('App\Compra', 'prdId', 'comIdProducto');
    }
}
