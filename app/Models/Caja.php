<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Caja
 *
 * @property $id
 * @property $idUser
 * @property $idEmpresas
 * @property $idLocal
 * @property $MontoApertura
 * @property $MontoVentas
 * @property $MontoDevoluciones
 * @property $MontoPerdidas
 * @property $MontoAjuste
 * @property $MontoCajasChicas
 * @property $MontoCierre
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Locale $locale
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caja extends Model
{
    use SoftDeletes;

    static $rules = [
		'idUser' => 'required',
		'idEmpresas' => 'required',
		'idLocal' => 'required',
		'MontoApertura' => 'required',
		'MontoVentas' => 'required',
		'MontoDevoluciones' => 'required',
		'MontoPerdidas' => 'required',
		'MontoAjuste' => 'required',
		'MontoCajasChicas' => 'required',
		'MontoCierre' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUser','idEmpresas','idLocal','MontoApertura','MontoVentas','MontoDevoluciones','MontoPerdidas','MontoAjuste','MontoCajasChicas','MontoCierre','idEstado'];


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
