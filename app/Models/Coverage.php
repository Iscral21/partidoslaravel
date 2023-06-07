<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coverage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'estado_id', 
        'distrito_federal_id',
        'distrito_local_id',
        'municipio_id',
        'seccion_id',
    ];    
}
