<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Venta
 *
 * @property $id
 * @property $idEmpresas
 * @property $idLocal
 * @property $idUser
 * @property $idMovimientos
 * @property $idDocumentosTipo
 * @property $FolioDocumentos
 * @property $idCliente
 * @property $idContactos
 * @property $CantidadProductos
 * @property $DescuentoAdicional
 * @property $MontoNeto
 * @property $MontoImpuestos
 * @property $MontoTotal
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Cliente $cliente
 * @property Contactoscliente $contactoscliente
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Locale $locale
 * @property Movimiento $movimiento
 * @property Pagosventa[] $pagosventas
 * @property Tipodocumento $tipodocumento
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    use SoftDeletes;

    static $rules = [
		'idEmpresas' => 'required',
		'idLocal' => 'required',
		'idUser' => 'required',
		'idMovimientos' => 'required',
		'idDocumentosTipo' => 'required',
		'FolioDocumentos' => 'required',
		'idCliente' => 'required',
		'idContactos' => 'required',
		'CantidadProductos' => 'required',
		'DescuentoAdicional' => 'required',
		'MontoNeto' => 'required',
		'MontoImpuestos' => 'required',
		'MontoTotal' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresas','idLocal','idUser','idMovimientos','idDocumentosTipo','FolioDocumentos','idCliente','idContactos','CantidadProductos','DescuentoAdicional','MontoNeto','MontoImpuestos','MontoTotal','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cliente()
    {
        return $this->hasOne('App\Models\Cliente', 'id', 'idCliente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contactoscliente()
    {
        return $this->hasOne('App\Models\Contactoscliente', 'id', 'idContactos');
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
    public function movimiento()
    {
        return $this->hasOne('App\Models\Movimiento', 'id', 'idMovimientos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagosventas()
    {
        return $this->hasMany('App\Models\Pagosventa', 'idVentas', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipodocumento()
    {
        return $this->hasOne('App\Models\Tipodocumento', 'id', 'idDocumentosTipo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'idUser');
    }
    

}
