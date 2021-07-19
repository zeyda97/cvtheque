<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Experience
 * @package App\Models
 * @version July 6, 2021, 11:39 pm UTC
 *
 * @property integer $type_experience_id
 * @property string $date_debut
 * @property string $date_fin
 * @property string $employeur
 * @property string $lieu_experience
 * @property string $client_prestation
 * @property integer $poste_id
 * @property string $activite_experience
 * @property string $appreciation
 * @property integer $user_id
 */
class Experience extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'experiences';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_experience_id',
        'date_debut',
        'date_fin',
        'employeur',
        'lieu_experience',
        'client_prestation',
        'poste_id',
        'activite_experience',
        'appreciation',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_experience_id' => 'integer',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'employeur' => 'string',
        'lieu_experience' => 'string',
        'client_prestation' => 'string',
        'poste_id' => 'integer',
        'activite_experience' => 'string',
        'appreciation' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_experience_id' => 'required',
        'date_debut' => 'required',
        'date_fin' => 'required',
        'employeur' => 'required|string|max:191',
        'lieu_experience' => 'required|string|max:191',
        'client_prestation' => 'required|string|max:191',
        'poste_id' => 'required',
        'activite_experience' => 'required|string|max:191',
        'appreciation' => 'required|string|max:191',
        'user_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


    public function type_experience()
    {
        return $this->belongsTo(TypeExperience::class,'type_experience_id')->withDefault();
    }



}
