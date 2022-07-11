<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Movimientosdetalle
 *
 * @property $id
 * @property $idMovimientos
 * @property $idLotes
 * @property $Ean
 * @property $idProductos
 * @property $idListaPrecio
 * @property $FactorDescuentoLista
 * @property $CantidadProductos
 * @property $DescuentoAdicional
 * @property $MontoNeto
 * @property $MontoImpuestos
 * @property $MontoTotal
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Lote $lote
 * @property Movimiento $movimiento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimientosdetalle extends Model
{
    use SoftDeletes;

    static $rules = [
		'idMovimientos' => 'required',
		'idLotes' => 'required',
		'Ean' => 'required',
		'idProductos' => 'required',
		'idListaPrecio' => 'required',
		'FactorDescuentoLista' => 'required',
		'CantidadProductos' => 'required',
		'DescuentoAdicional' => 'required',
		'MontoNeto' => 'required',
		'MontoImpuestos' => 'required',
		'MontoTotal' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idMovimientos','idLotes','Ean','idProductos','idListaPrecio','FactorDescuentoLista','CantidadProductos','DescuentoAdicional','MontoNeto','MontoImpuestos','MontoTotal','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'idEstado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lote()
    {
        return $this->hasOne('App\Models\Lote', 'id', 'idLotes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function movimiento()
    {
        return $this->hasOne('App\Models\Movimiento', 'id', 'idMovimientos');
    }
    

}
