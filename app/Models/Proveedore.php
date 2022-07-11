<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $Rut
 * @property $RazonSocial
 * @property $NombreFantasia
 * @property $idPaises
 * @property $idCiudades
 * @property $Direccion
 * @property $idTiposProveedores
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Ciudade $ciudade
 * @property Contactosproveedore[] $contactosproveedores
 * @property Paise $paise
 * @property Tiposproveedore $tiposproveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    use SoftDeletes;

    static $rules = [
		'Rut' => 'required',
		'RazonSocial' => 'required',
		'NombreFantasia' => 'required',
		'idPaises' => 'required',
		'idCiudades' => 'required',
		'Direccion' => 'required',
		'idTiposProveedores' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Rut','RazonSocial','NombreFantasia','idPaises','idCiudades','Direccion','idTiposProveedores','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'idCiudades');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactosproveedores()
    {
        return $this->hasMany('App\Models\Contactosproveedore', 'idProveedor', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'id', 'idPaises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tiposproveedore()
    {
        return $this->hasOne('App\Models\Tiposproveedore', 'id', 'idTiposProveedores');
    }
    

}
