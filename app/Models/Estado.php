<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Estado
 *
 * @property $id
 * @property $Descripcion
 * @property $Modulo
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Accionescajaschica[] $accionescajaschicas
 * @property Autorizacionescaja[] $autorizacionescajas
 * @property Caja[] $cajas
 * @property Cajaschica[] $cajaschicas
 * @property Cajaschicasdetalle[] $cajaschicasdetalles
 * @property Ciudade[] $ciudades
 * @property Cliente[] $clientes
 * @property Clientestipo[] $clientestipos
 * @property Contactoscliente[] $contactosclientes
 * @property Contactosproveedore[] $contactosproveedores
 * @property Empresa[] $empresas
 * @property Encargado[] $encargados
 * @property Familia[] $familias
 * @property Grupo[] $grupos
 * @property Impuesto[] $impuestos
 * @property Listaprecio[] $listaprecios
 * @property Locale[] $locales
 * @property Lote[] $lotes
 * @property Metodospago[] $metodospagos
 * @property Movimiento[] $movimientos
 * @property Movimientosdetalle[] $movimientosdetalles
 * @property Pagosventa[] $pagosventas
 * @property Paise[] $paises
 * @property Producto[] $productos
 * @property Subgrupo[] $subgrupos
 * @property Subproducto[] $subproductos
 * @property Tamano[] $tamanos
 * @property Tipocajaschica[] $tipocajaschicas
 * @property Tipodocumento[] $tipodocumentos
 * @property Tipolistaprecio[] $tipolistaprecios
 * @property Tipolocale[] $tipolocales
 * @property Tipomovimientoscaja[] $tipomovimientoscajas
 * @property Tiposmovimiento[] $tipomovimientos
 * @property Tiposproveedore[] $tiposproveedores
 * @property Venta[] $ventas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{
    use SoftDeletes;

    static $rules = [
		'Descripcion' => 'required',
		'Modulo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Descripcion','Modulo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accionescajaschicas()
    {
        return $this->hasMany('App\Models\Accionescajaschica', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function autorizacionescajas()
    {
        return $this->hasMany('App\Models\Autorizacionescaja', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajas()
    {
        return $this->hasMany('App\Models\Caja', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicas()
    {
        return $this->hasMany('App\Models\Cajaschica', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cajaschicasdetalles()
    {
        return $this->hasMany('App\Models\Cajaschicasdetalle', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ciudades()
    {
        return $this->hasMany('App\Models\Ciudade', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientes()
    {
        return $this->hasMany('App\Models\Cliente', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientestipos()
    {
        return $this->hasMany('App\Models\Clientestipo', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactosclientes()
    {
        return $this->hasMany('App\Models\Contactoscliente', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactosproveedores()
    {
        return $this->hasMany('App\Models\Contactosproveedore', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empresas()
    {
        return $this->hasMany('App\Models\Empresa', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function encargados()
    {
        return $this->hasMany('App\Models\Encargado', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function familias()
    {
        return $this->hasMany('App\Models\Familia', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grupos()
    {
        return $this->hasMany('App\Models\Grupo', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impuestos()
    {
        return $this->hasMany('App\Models\Impuesto', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function listaprecios()
    {
        return $this->hasMany('App\Models\Listaprecio', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locales()
    {
        return $this->hasMany('App\Models\Locale', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lotes()
    {
        return $this->hasMany('App\Models\Lote', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function metodospagos()
    {
        return $this->hasMany('App\Models\Metodospago', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientos()
    {
        return $this->hasMany('App\Models\Movimiento', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientosdetalles()
    {
        return $this->hasMany('App\Models\Movimientosdetalle', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagosventas()
    {
        return $this->hasMany('App\Models\Pagosventa', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paises()
    {
        return $this->hasMany('App\Models\Paise', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subgrupos()
    {
        return $this->hasMany('App\Models\Subgrupo', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subproductos()
    {
        return $this->hasMany('App\Models\Subproducto', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tamanos()
    {
        return $this->hasMany('App\Models\Tamano', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipocajaschicas()
    {
        return $this->hasMany('App\Models\Tipocajaschica', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipodocumentos()
    {
        return $this->hasMany('App\Models\Tipodocumento', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipolistaprecios()
    {
        return $this->hasMany('App\Models\Tipolistaprecio', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipolocales()
    {
        return $this->hasMany('App\Models\Tipolocale', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipomovimientoscajas()
    {
        return $this->hasMany('App\Models\Tipomovimientoscaja', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipomovimientos()
    {
        return $this->hasMany('App\Models\Tiposmovimiento', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tiposproveedores()
    {
        return $this->hasMany('App\Models\Tiposproveedore', 'idEstado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ventas()
    {
        return $this->hasMany('App\Models\Venta', 'idEstado', 'id');
    }
    

}
