<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prestamo
 *
 * @property $id
 * @property $docsuscriptor
 * @property $codigolibro
 * @property $fechaPrestamo
 * @property $fechaDevolucion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prestamo extends Model
{
    
    static $rules = [
		'docsuscriptor' => 'required',
		'codigolibro' => 'required',
		'fechaPrestamo' => 'required',
		'fechaDevolucion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['docsuscriptor','codigolibro','fechaPrestamo','fechaDevolucion'];



}
