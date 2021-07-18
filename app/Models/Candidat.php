<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Candidat
 * @package App\Models
 * @version July 12, 2021, 10:18 pm UTC
 *
 * @property integer $type_candidature_id
 * @property integer $genre_id
 * @property string $date_naissance
 * @property string $lieu_naissance
 * @property integer $nationalite_id
 * @property integer $nombre_enfant
 * @property string $numero_telephone
 * @property string $deuxieme_numero_telephone
 * @property string $deuxieme_email
 * @property string $site_web
 * @property integer $poste_id
 * @property integer $statut_id
 * @property integer $situation_matrimoniale_id
 * @property integer $type_metier_id
 * @property boolean $localisation
 * @property integer $user_id
 */
class Candidat extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'candidats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'type_candidature_id',
        'genre_id',
        'date_naissance',
        'lieu_naissance',
        'nationalite_id',
        'nombre_enfant',
        'numero_telephone',
        'deuxieme_numero_telephone',
        'deuxieme_email',
        'site_web',
        'poste_id',
        'statut_id',
        'situation_matrimoniale_id',
        'type_metier_id',
        'localisation',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type_candidature_id' => 'integer',
        'genre_id' => 'integer',
        'date_naissance' => 'date',
        'lieu_naissance' => 'string',
        'nationalite_id' => 'integer',
        'nombre_enfant' => 'integer',
        'numero_telephone' => 'string',
        'deuxieme_numero_telephone' => 'string',
        'deuxieme_email' => 'string',
        'site_web' => 'string',
        'poste_id' => 'integer',
        'statut_id' => 'integer',
        'situation_matrimoniale_id' => 'integer',
        'type_metier_id' => 'integer',
        'localisation' => 'boolean',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_candidature_id' => 'required',
        'genre_id' => 'required',
        'date_naissance' => 'required',
        'lieu_naissance' => 'required|string',
        'nationalite_id' => 'required',
        'nombre_enfant' => 'required|integer',
        'numero_telephone' => 'required|string|max:191',
        'deuxieme_numero_telephone' => 'nullable|string|max:191',
        'deuxieme_email' => 'nullable|string|max:191',
        'site_web' => 'required|string|max:191',
        'poste_id' => 'required',
        'statut_id' => 'required',
        'situation_matrimoniale_id' => 'required',
        'type_metier_id' => 'required',
        'localisation' => 'required|boolean',
        
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
