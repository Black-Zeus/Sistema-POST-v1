<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Locale
 *
 * @property $id
 * @property $idEmpresas
 * @property $Descripcion
 * @property $idPaises
 * @property $idCiudades
 * @property $Direccion
 * @property $Email
 * @property $Fono
 * @property $Anexo
 * @property $idEncargados
 * @property $idEstado
 * @property $idTipoLocales
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Caja[] $cajas
 * @property Cajaschica[] $cajaschicas
 * @property Cajaschicasdetalle[] $cajaschicasdetalles
 * @property Ciudade $ciudade
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Lote[] $lotes
 * @property Movimiento[] $movimientos
 * @property Movimiento[] $movimientos
 * @property Paise $paise
 * @property Tipolocale $tipolocale
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Locale extends Model
{
    use SoftDeletes;

    static $rules = [
		'idEmpresas' => 'required',
		'Descripcion' => 'required',
		'idPaises' => 'required',
		'idCiudades' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'idEncargados' => 'required',
		'idEstado' => 'required',
		'idTipoLocales' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresas','Descripcion','idPaises','idCiudades','Direccion','Email','Fono','Anexo','idEncargados','idEstado','idTipoLocales'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajas()
    {
        return $this->hasMany('App\Models\Caja', 'idLocal', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicas()
    {
        return $this->hasMany('App\Models\Cajaschica', 'idLocal', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicasdetalles()
    {
        return $this->hasMany('App\Models\Cajaschicasdetalle', 'idLocal', 'id');
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
    public function empresa()
    {
        return $this->hasOne('App\Models\Empresa', 'id', 'idEmpresas');
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
    public function lotes()
    {
        return $this->hasMany('App\Models\Lote', 'idLocal', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'idLocalOrigen', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'idLocalDestino', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'id', 'idPaises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipolocale()
    {
        return $this->hasOne('App\Models\Tipolocale', 'id', 'idTipoLocales');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idLocal', 'id');
    }
    

}
