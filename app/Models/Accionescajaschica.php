<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Accionescajaschica
 *
 * @property $id
 * @property $Descripcion
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Cajaschicasdetalle[] $cajaschicasdetalles
 * @property Estado $estado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Accionescajaschica extends Model
{
    use SoftDeletes;

    static $rules = [
		'Descripcion' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicasdetalles()
    {
        return $this->hasMany('App\Models\Cajaschicasdetalle', 'idAccionesCajasChicas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'idEstado');
    }
    

}
