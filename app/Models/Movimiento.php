<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Movimiento
 *
 * @property $id
 * @property $idEmpresas
 * @property $idTipoMovimientos
 * @property $idLocalOrigen
 * @property $idLocalDestino
 * @property $idDocumentosTipo
 * @property $FolioDocumentos
 * @property $CantidadProductos
 * @property $DescuentoAdicional
 * @property $MontoNeto
 * @property $MontoImpuestos
 * @property $MontoTotal
 * @property $idCliente
 * @property $idContactos
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
 * @property Locale $locale
 * @property Movimientosdetalle[] $movimientosdetalles
 * @property Tipodocumento $tipodocumento
 * @property Tipomovimiento $tipomovimiento
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Movimiento extends Model
{
    use SoftDeletes;

    static $rules = [
		'idEmpresas' => 'required',
		'idTipoMovimientos' => 'required',
		'idLocalOrigen' => 'required',
		'idLocalDestino' => 'required',
		'idDocumentosTipo' => 'required',
		'FolioDocumentos' => 'required',
		'CantidadProductos' => 'required',
		'DescuentoAdicional' => 'required',
		'MontoNeto' => 'required',
		'MontoImpuestos' => 'required',
		'MontoTotal' => 'required',
		'idCliente' => 'required',
		'idContactos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresas','idTipoMovimientos','idLocalOrigen','idLocalDestino','idDocumentosTipo','FolioDocumentos','CantidadProductos','DescuentoAdicional','MontoNeto','MontoImpuestos','MontoTotal','idCliente','idContactos','idEstado'];


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
        return $this->hasOne('App\Models\Locale', 'id', 'idLocalOrigen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function locale()
    {
        return $this->hasOne('App\Models\Locale', 'id', 'idLocalDestino');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientosdetalles()
    {
        return $this->hasMany('App\Models\Movimientosdetalle', 'idMovimientos', 'id');
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
    public function tipomovimiento()
    {
        return $this->hasOne('App\Models\Tipomovimiento', 'id', 'idTipoMovimientos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idMovimientos', 'id');
    }
    

}
