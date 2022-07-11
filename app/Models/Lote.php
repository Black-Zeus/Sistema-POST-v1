<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lote
 *
 * @property $id
 * @property $idEmpresas
 * @property $idSubProducto
 * @property $Ean
 * @property $Stock
 * @property $StockCritico
 * @property $StockComprometido
 * @property $idLocal
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Empresa $empresa
 * @property Estado $estado
 * @property Locale $locale
 * @property Movimientosdetalle[] $movimientosdetalles
 * @property Subproducto $subproducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lote extends Model
{
    use SoftDeletes;

    static $rules = [
		'idEmpresas' => 'required',
		'idSubProducto' => 'required',
		'Ean' => 'required',
		'Stock' => 'required',
		'StockCritico' => 'required',
		'StockComprometido' => 'required',
		'idLocal' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idEmpresas','idSubProducto','Ean','Stock','StockCritico','StockComprometido','idLocal','idEstado'];


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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function movimientosdetalles()
    {
        return $this->hasMany('App\Models\Movimientosdetalle', 'idLotes', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subproducto()
    {
        return $this->hasOne('App\Models\Subproducto', 'id', 'idSubProducto');
    }
    

}
