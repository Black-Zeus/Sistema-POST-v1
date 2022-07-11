<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Migration
 *
 * @property $id
 * @property $migration
 * @property $batch
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Migration extends Model
{
    
    static $rules = [
		'migration' => 'required',
		'batch' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['migration','batch'];



}
