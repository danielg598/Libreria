<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suscriptore
 *
 * @property $id
 * @property $documento
 * @property $nombre
 * @property $direccion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suscriptore extends Model
{
    
    static $rules = [
		'documento' => 'required',
		'nombre' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','nombre','direccion'];



}
