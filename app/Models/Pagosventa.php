<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pagosventa
 *
 * @property $id
 * @property $idVentas
 * @property $idMetodosPagos
 * @property $CodigoRegistro
 * @property $TotalVentas
 * @property $MontoTemporal
 * @property $SaldoVentas
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Venta $venta
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pagosventa extends Model
{
    use SoftDeletes;

    static $rules = [
		'idVentas' => 'required',
		'idMetodosPagos' => 'required',
		'CodigoRegistro' => 'required',
		'TotalVentas' => 'required',
		'MontoTemporal' => 'required',
		'SaldoVentas' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idVentas','idMetodosPagos','CodigoRegistro','TotalVentas','MontoTemporal','SaldoVentas','idEstado'];


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
    public function venta()
    {
        return $this->hasOne('App\Models\Venta', 'id', 'idVentas');
    }
    

}
