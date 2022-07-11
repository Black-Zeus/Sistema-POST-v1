<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contactosproveedore
 *
 * @property $id
 * @property $idProveedor
 * @property $idEncargados
 * @property $Nombre
 * @property $idPaises
 * @property $idCiudades
 * @property $Direccion
 * @property $Email
 * @property $Fono
 * @property $Anexo
 * @property $idEstado
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property Ciudade $ciudade
 * @property Encargado $encargado
 * @property Estado $estado
 * @property Paise $paise
 * @property Proveedore $proveedore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contactosproveedore extends Model
{
    use SoftDeletes;

    static $rules = [
		'idProveedor' => 'required',
		'idEncargados' => 'required',
		'Nombre' => 'required',
		'idPaises' => 'required',
		'idCiudades' => 'required',
		'Direccion' => 'required',
		'Email' => 'required',
		'Anexo' => 'required',
		'idEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idProveedor','idEncargados','Nombre','idPaises','idCiudades','Direccion','Email','Fono','Anexo','idEstado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function ciudade()
    {
        return $this->hasOne('App\Models\Ciudade', 'id', 'idCiudades');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function encargado()
    {
        return $this->hasOne('App\Models\Encargado', 'id', 'idEncargados');
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
    public function paise()
    {
        return $this->hasOne('App\Models\Paise', 'id', 'idPaises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function proveedore()
    {
        return $this->hasOne('App\Models\Proveedore', 'id', 'idProveedor');
    }
    

}
