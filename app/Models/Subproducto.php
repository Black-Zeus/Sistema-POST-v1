<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Subproducto
 *
 * @property $id
 * @property $idProductos
 * @property $Descripcion
 * @property $idGrupo
 * @property $idSubGrupo
 * @property $idTamano
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Grupo $grupo
 * @property Lote[] $lotes
 * @property Producto $producto
 * @property Subgrupo $subgrupo
 * @property Tamano $tamano
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subproducto extends Model
{
    use SoftDeletes;

    static $rules = [
		'idProductos' => 'required',
		'Descripcion' => 'required',
		'idGrupo' => 'required',
		'idSubGrupo' => 'required',
		'idTamano' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProductos','Descripcion','idGrupo','idSubGrupo','idTamano','idEstado'];


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
    public function lotes()
    {
        return $this->hasMany('App\Models\Lote', 'idSubProducto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'idProductos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subgrupo()
    {
        return $this->hasOne('App\Models\Subgrupo', 'id', 'idSubGrupo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tamano()
    {
        return $this->hasOne('App\Models\Tamano', 'id', 'idTamano');
    }
    

}
