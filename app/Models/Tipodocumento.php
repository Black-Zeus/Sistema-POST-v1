<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tipodocumento
 *
 * @property $id
 * @property $codDocumento
 * @property $Descripcion
 * @property $idEstado
 * @property $Modulo
 * @property $EsDTE
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Estado $estado
 * @property Movimiento[] $movimientos
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipodocumento extends Model
{
    use SoftDeletes;

    static $rules = [
		'codDocumento' => 'required',
		'Descripcion' => 'required',
		'idEstado' => 'required',
		'Modulo' => 'required',
		'EsDTE' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codDocumento','Descripcion','idEstado','Modulo','EsDTE'];


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
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'idDocumentosTipo', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idDocumentosTipo', 'id');
    }
    

}
