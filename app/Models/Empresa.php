<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa
 *
 * @property $id
 * @property $Descripcion
 * @property $idPaises
 * @property $idCiudades
 * @property $Direccion
 * @property $Email
 * @property $Fono
 * @property $Anexo
 * @property $idEncargados
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Caja[] $cajas
 * @property Cajaschica[] $cajaschicas
 * @property Ciudade $ciudade
 * @property Estado $estado
 * @property Locale[] $locales
 * @property Lote[] $lotes
 * @property Movimiento[] $movimientos
 * @property Paise $paise
 * @property Producto[] $productos
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empresa extends Model
{
    use SoftDeletes;

    static $rules = [
		'Descripcion' => 'required',
		'idPaises' => 'required',
		'idCiudades' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'idEncargados' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','idPaises','idCiudades','Direccion','Email','Fono','Anexo','idEncargados','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajas()
    {
        return $this->hasMany('App\Models\Caja', 'idEmpresas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicas()
    {
        return $this->hasMany('App\Models\Cajaschica', 'idEmpresas', 'id');
    }
    
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
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'idEstado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locales()
    {
        return $this->hasMany('App\Models\Locale', 'idEmpresas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lotes()
    {
        return $this->hasMany('App\Models\Lote', 'idEmpresas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'idEmpresas', 'id');
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
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'idEmpresas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idEmpresas', 'id');
    }
    

}
