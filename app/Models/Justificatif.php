<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Justificatif
 * @package App\Models
 * @version July 6, 2021, 11:37 pm UTC
 *
 * @property integer $type_justificatif_id
 * @property string $fichier
 * @property integer $experience_id
 * @property integer $user_id
 * @property integer $langue_id
 * @property integer $competence_id
 * @property integer $formation_id
 */
class Justificatif extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'justificatifs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_justificatif_id',
        'fichier',
        'experience_id',
        'user_id',
        'langue_id',
        'competence_id',
        'formation_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_justificatif_id' => 'integer',
        'fichier' => 'string',
        'experience_id' => 'integer',
        'user_id' => 'integer',
        'langue_id' => 'integer',
        'competence_id' => 'integer',
        'formation_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_justificatif_id' => 'required',
        'fichier' => 'required|string|max:191',
        'experience_id' => 'required',
        'user_id' => 'required',
        'langue_id' => 'required',
        'competence_id' => 'required',
        'formation_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
