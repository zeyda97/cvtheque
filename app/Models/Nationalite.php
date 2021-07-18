<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Nationalite
 * @package App\Models
 * @version July 6, 2021, 11:18 pm UTC
 *
 * @property string $nom_pays
 * @property string $nom_nationalite
 */
class Nationalite extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'nationalites';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom_pays',
        'nom_nationalite'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom_pays' => 'string',
        'nom_nationalite' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom_pays' => 'required|string|max:191',
        'nom_nationalite' => 'required|string|max:191',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
