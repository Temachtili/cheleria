<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chela
 *
 * @property $id
 * @property $nombre
 * @property $precio
 * @property $marca
 * @property $modelo
 * @property $tipo
 * @property $alcohol
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Chela extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'precio' => 'required',
		'marca' => 'required',
		'modelo' => 'required',
		'tipo' => 'required',
		'alcohol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','precio','marca','modelo','tipo','alcohol'];



}
