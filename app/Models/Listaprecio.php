<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Listaprecio
 *
 * @property $id
 * @property $idTipoListaPrecios
 * @property $Descripcion
 * @property $FechaInicio
 * @property $FechaTermino
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Listapreciodetalle[] $listapreciodetalles
 * @property Tipolistaprecio $tipolistaprecio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listaprecio extends Model
{
    use SoftDeletes;

    static $rules = [
		'idTipoListaPrecios' => 'required',
		'Descripcion' => 'required',
		'FechaInicio' => 'required',
		'FechaTermino' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idTipoListaPrecios','Descripcion','FechaInicio','FechaTermino','idEstado'];


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
    public function listapreciodetalles()
    {
        return $this->hasMany('App\Models\Listapreciodetalle', 'idListaPrecio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipolistaprecio()
    {
        return $this->hasOne('App\Models\Tipolistaprecio', 'id', 'idTipoListaPrecios');
    }
    

}
