<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cajaschica
 *
 * @property $id
 * @property $idUser
 * @property $idEmpresas
 * @property $idLocal
 * @property $MontoEfectivo
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Cajaschicasdetalle[] $cajaschicasdetalles
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Locale $locale
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cajaschica extends Model
{
    use SoftDeletes;

    static $rules = [
		'idUser' => 'required',
		'idEmpresas' => 'required',
		'idLocal' => 'required',
		'MontoEfectivo' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUser','idEmpresas','idLocal','MontoEfectivo','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicasdetalles()
    {
        return $this->hasMany('App\Models\Cajaschicasdetalle', 'idCajasChicas', 'id');
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function locale()
    {
        return $this->hasOne('App\Models\Locale', 'id', 'idLocal');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
