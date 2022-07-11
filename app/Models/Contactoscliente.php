<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contactoscliente
 *
 * @property $id
 * @property $idClientes
 * @property $idEncargados
 * @property $Nombre
 * @property $idPaises
 * @property $idCiudades
 * @property $Direccion
 * @property $Email
 * @property $Fono
 * @property $Anexo
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Ciudade $ciudade
 * @property Cliente $cliente
 * @property Encargado $encargado
 * @property Estado $estado
 * @property Movimiento[] $movimientos
 * @property Paise $paise
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contactoscliente extends Model
{
    use SoftDeletes;

    static $rules = [
		'idClientes' => 'required',
		'idEncargados' => 'required',
		'Nombre' => 'required',
		'idPaises' => 'required',
		'idCiudades' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'Fono' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idClientes','idEncargados','Nombre','idPaises','idCiudades','Direccion','Email','Fono','Anexo','idEstado'];


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
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'idClientes');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function encargado()
    {
        return $this->hasOne('App\Models\Encargado', 'id', 'idEncargados');
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
        return $this->hasMany('App\Models\Movimiento', 'idContactos', 'id');
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
        return $this->hasMany('App\Models\Venta', 'idContactos', 'id');
    }
    

}
