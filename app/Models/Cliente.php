<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 *
 * @property $id
 * @property $Rut
 * @property $RazonSocial
 * @property $NombreFantasia
 * @property $idPaises
 * @property $idCiudades
 * @property $Direccion
 * @property $idClientesTipos
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Ciudade $ciudade
 * @property Clientestipo $clientestipo
 * @property Contactoscliente[] $contactosclientes
 * @property Estado $estado
 * @property Movimiento[] $movimientos
 * @property Paise $paise
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cliente extends Model
{
    use SoftDeletes;

    static $rules = [
		'Rut' => 'required',
		'RazonSocial' => 'required',
		'NombreFantasia' => 'required',
		'idPaises' => 'required',
		'idCiudades' => 'required',
		'Direccion' => 'required',
		'idClientesTipos' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Rut','RazonSocial','NombreFantasia','idPaises','idCiudades','Direccion','idClientesTipos','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'idCiudades');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function clientestipo()
    {
        return $this->hasOne('App\Models\Clientestipo', 'id', 'idClientesTipos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactosclientes()
    {
        return $this->hasMany('App\Models\Contactoscliente', 'idClientes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'idEstado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'idCliente', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'id', 'idPaises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idCliente', 'id');
    }
    

}
