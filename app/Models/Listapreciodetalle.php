<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Listapreciodetalle
 *
 * @property $id
 * @property $idListaPrecio
 * @property $idLotes
 * @property $Ean
 * @property $Monto
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Listaprecio $listaprecio
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listapreciodetalle extends Model
{
    use SoftDeletes;

    static $rules = [
		'idListaPrecio' => 'required',
		'idLotes' => 'required',
		'Ean' => 'required',
		'Monto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idListaPrecio','idLotes','Ean','Monto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function listaprecio()
    {
        return $this->hasOne('App\Models\Listaprecio', 'id', 'idListaPrecio');
    }
    

}
