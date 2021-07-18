<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Formation
 * @package App\Models
 * @version July 6, 2021, 11:39 pm UTC
 *
 * @property string $specialite_etudie
 * @property string $date_debut
 * @property string $date_fin
 * @property string $etablissement
 * @property string $diplome
 * @property integer $user_id
 */
class Formation extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'formations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'specialite_etudie',
        'date_debut',
        'date_fin',
        'etablissement',
        'diplome',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'specialite_etudie' => 'string',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'etablissement' => 'string',
        'diplome' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'specialite_etudie' => 'required|string|max:191',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'etablissement' => 'required|string|max:191',
        'diplome' => 'required|string|max:191',
        'user_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
