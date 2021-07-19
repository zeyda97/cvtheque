<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Competence
 * @package App\Models
 * @version July 6, 2021, 11:38 pm UTC
 *
 * @property integer $type_competence_id
 * @property integer $niveaux_id
 * @property integer $user_id
 * @property string $annee
 */
class Competence extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'competences';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_competence_id',
        'niveaux_id',
        'user_id',
        'annee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_competence_id' => 'integer',
        'niveaux_id' => 'integer',
        'user_id' => 'integer',
        'annee' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_competence_id' => 'required',
        'niveaux_id' => 'required',
        'user_id' => 'required',
        'annee' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function type_competence()
    {
        return $this->belongsTo(TypeCompetence::class,'type_competence_id')->withDefault();
    }
    public function niveau()
    {
        return $this->belongsTo(Niveaux::class,'niveaux_id')->withDefault();
    }
}
