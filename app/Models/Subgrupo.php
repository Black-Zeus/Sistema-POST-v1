<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subgrupo
 *
 * @property $id
 * @property $idGrupo
 * @property $Descripcion
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Grupo $grupo
 * @property Subproducto[] $subproductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subgrupo extends Model
{
    use SoftDeletes;

    static $rules = [
		'idGrupo' => 'required',
		'Descripcion' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idGrupo','Descripcion','idEstado'];


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
    public function grupo()
    {
        return $this->hasOne('App\Models\Grupo', 'id', 'idGrupo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subproductos()
    {
        return $this->hasMany('App\Models\Subproducto', 'idSubGrupo', 'id');
    }
    

}
