<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tamano
 *
 * @property $id
 * @property $Descripcion
 * @property $Codigo
 * @property $Orden
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Subproducto[] $subproductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tamano extends Model
{
    use SoftDeletes;

    static $rules = [
		'Descripcion' => 'required',
		'Codigo' => 'required',
		'Orden' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Codigo','Orden','idEstado'];


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
    public function subproductos()
    {
        return $this->hasMany('App\Models\Subproducto', 'idTamano', 'id');
    }
    

}
