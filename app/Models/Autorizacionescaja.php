<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Autorizacionescaja
 *
 * @property $id
 * @property $idUser
 * @property $idCajasChicasDetalles
 * @property $Descripcion
 * @property $idTipoMovimientosCajas
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Tipomovimientoscaja $tipomovimientoscaja
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autorizacionescaja extends Model
{
    use SoftDeletes;

    static $rules = [
		'idUser' => 'required',
		'idCajasChicasDetalles' => 'required',
		'Descripcion' => 'required',
		'idTipoMovimientosCajas' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUser','idCajasChicasDetalles','Descripcion','idTipoMovimientosCajas','idEstado'];


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
        return $this->hasOne('App\Models\Tipomovimientoscaja', 'id', 'idTipoMovimientosCajas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
