<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cajaschicasdetalle
 *
 * @property $id
 * @property $idCajasChicas
 * @property $idAccionesCajasChicas
 * @property $idTipoCajasChicas
 * @property $idTipoMovimientosCajas
 * @property $Descripcion
 * @property $Monto
 * @property $idUser
 * @property $idLocal
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Accionescajaschica $accionescajaschica
 * @property Cajaschica $cajaschica
 * @property Estado $estado
 * @property Locale $locale
 * @property Tipocajaschica $tipocajaschica
 * @property Tipomovimientoscaja $tipomovimientoscaja
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cajaschicasdetalle extends Model
{
    use SoftDeletes;

    static $rules = [
		'idCajasChicas' => 'required',
		'idAccionesCajasChicas' => 'required',
		'idTipoCajasChicas' => 'required',
		'idTipoMovimientosCajas' => 'required',
		'Descripcion' => 'required',
		'Monto' => 'required',
		'idLocal' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idCajasChicas','idAccionesCajasChicas','idTipoCajasChicas','idTipoMovimientosCajas','Descripcion','Monto','idUser','idLocal','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function accionescajaschica()
    {
        return $this->hasOne('App\Models\Accionescajaschica', 'id', 'idAccionesCajasChicas');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cajaschica()
    {
        return $this->hasOne('App\Models\Cajaschica', 'id', 'idCajasChicas');
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
    public function locale()
    {
        return $this->hasOne('App\Models\Locale', 'id', 'idLocal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipocajaschica()
    {
        return $this->hasOne('App\Models\Tipocajaschica', 'id', 'idTipoCajasChicas');
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
