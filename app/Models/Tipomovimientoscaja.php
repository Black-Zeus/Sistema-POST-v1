<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipomovimientoscaja
 *
 * @property $id
 * @property $Descripcion
 * @property $idTipoCajasChicas
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Autorizacionescaja[] $autorizacionescajas
 * @property Cajaschicasdetalle[] $cajaschicasdetalles
 * @property Estado $estado
 * @property Tipocajaschica $tipocajaschica
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipomovimientoscaja extends Model
{
    use SoftDeletes;

    static $rules = [
		'Descripcion' => 'required',
		'idTipoCajasChicas' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','idTipoCajasChicas','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function autorizacionescajas()
    {
        return $this->hasMany('App\Models\Autorizacionescaja', 'idTipoMovimientosCajas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicasdetalles()
    {
        return $this->hasMany('App\Models\Cajaschicasdetalle', 'idTipoMovimientosCajas', 'id');
    }
    
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
    public function tipocajaschica()
    {
        return $this->hasOne('App\Models\Tipocajaschica', 'id', 'id');
    }
    

}
