<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipocajaschica
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
 * @property Tipomovimientoscaja $tipomovimientoscaja
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipocajaschica extends Model
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
        return $this->hasMany('App\Models\Cajaschicasdetalle', 'idTipoCajasChicas', 'id');
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
    public function tipomovimientoscaja()
    {
        return $this->hasOne('App\Models\Tipomovimientoscaja', 'id', 'id');
    }
    

}
