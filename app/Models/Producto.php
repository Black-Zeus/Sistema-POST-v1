<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Producto
 *
 * @property $id
 * @property $idEmpresas
 * @property $Descripcion
 * @property $idFamilias
 * @property $idEstado
 * @property $StockCritico
 * @property $StockComprometido
 * @property $idImpuestos
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Familia $familia
 * @property Impuesto $impuesto
 * @property Subproducto[] $subproductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    use SoftDeletes;

    static $rules = [
		'idEmpresas' => 'required',
		'Descripcion' => 'required',
		'idFamilias' => 'required',
		'idEstado' => 'required',
		'StockCritico' => 'required',
		'StockComprometido' => 'required',
		'idImpuestos' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresas','Descripcion','idFamilias','idEstado','StockCritico','StockComprometido','idImpuestos'];


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
    public function familia()
    {
        return $this->hasOne('App\Models\Familia', 'id', 'idFamilias');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function impuesto()
    {
        return $this->hasOne('App\Models\Impuesto', 'id', 'idImpuestos');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subproductos()
    {
        return $this->hasMany('App\Models\Subproducto', 'idProductos', 'id');
    }
    

}
