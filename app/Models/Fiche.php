<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Fiche
 * @package App\Models
 * @version July 6, 2021, 11:44 pm UTC
 *
 * @property string $nom
 * @property string $prenom
 * @property integer $objet_contrat_id
 * @property string $date_debut_contrat
 * @property string $date_fin_contrat
 * @property integer $motif_contrat_id
 * @property string $memo_fin_contrat
 * @property boolean $prolongation
 * @property string $motif_prolongation
 * @property integer $duree_prolongation
 * @property string $debut_periode_prolongation
 * @property string $fin_periode_prolongation
 * @property string $autre_equipement-travail
 * @property boolean $code_ethique
 * @property boolean $reglement_interieur
 * @property boolean $engagement_confidentialite
 * @property boolean $procedure
 * @property boolean $sensibilisation_qualite
 * @property string $signataire_sensibilisation_qualite
 * @property string $date_sensibilisation_qualite
 * @property string $commentaire_sensibilisation_qualite
 * @property boolean $sensibilisation_risque
 * @property string $signataire_sensibilisation_risque
 * @property string $date_sensibilisation_risque
 * @property string $commentaire_sensibilisation_risque
 * @property boolean $visa_direction_accueil
 * @property boolean $signataire_visa_direction_accueil
 * @property string $date_visa_direction_accueil
 * @property string $commentaire_visa_direction_accueil
 * @property boolean $visa_rh
 * @property string $signataire_visa_rh
 * @property string $date_visa_rh
 * @property string $commentaire_date_visa_rh
 * @property integer $niveaux_id
 * @property integer $user_id
 */
class Fiche extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'fiches';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nom',
        'prenom',
        'objet_contrat_id',
        'date_debut_contrat',
        'date_fin_contrat',
        'motif_contrat_id',
        'memo_fin_contrat',
        'prolongation',
        'motif_prolongation',
        'duree_prolongation',
        'debut_periode_prolongation',
        'fin_periode_prolongation',
        'autre_equipement-travail',
        'code_ethique',
        'reglement_interieur',
        'engagement_confidentialite',
        'procedure',
        'sensibilisation_qualite',
        'signataire_sensibilisation_qualite',
        'date_sensibilisation_qualite',
        'commentaire_sensibilisation_qualite',
        'sensibilisation_risque',
        'signataire_sensibilisation_risque',
        'date_sensibilisation_risque',
        'commentaire_sensibilisation_risque',
        'visa_direction_accueil',
        'signataire_visa_direction_accueil',
        'date_visa_direction_accueil',
        'commentaire_visa_direction_accueil',
        'visa_rh',
        'signataire_visa_rh',
        'date_visa_rh',
        'commentaire_date_visa_rh',
        'niveaux_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nom' => 'string',
        'prenom' => 'string',
        'objet_contrat_id' => 'integer',
        'date_debut_contrat' => 'date',
        'date_fin_contrat' => 'date',
        'motif_contrat_id' => 'integer',
        'memo_fin_contrat' => 'string',
        'prolongation' => 'boolean',
        'motif_prolongation' => 'string',
        'duree_prolongation' => 'integer',
        'debut_periode_prolongation' => 'date',
        'fin_periode_prolongation' => 'date',
        'autre_equipement-travail' => 'string',
        'code_ethique' => 'boolean',
        'reglement_interieur' => 'boolean',
        'engagement_confidentialite' => 'boolean',
        'procedure' => 'boolean',
        'sensibilisation_qualite' => 'boolean',
        'signataire_sensibilisation_qualite' => 'string',
        'date_sensibilisation_qualite' => 'date',
        'commentaire_sensibilisation_qualite' => 'string',
        'sensibilisation_risque' => 'boolean',
        'signataire_sensibilisation_risque' => 'string',
        'date_sensibilisation_risque' => 'date',
        'commentaire_sensibilisation_risque' => 'string',
        'visa_direction_accueil' => 'boolean',
        'signataire_visa_direction_accueil' => 'boolean',
        'date_visa_direction_accueil' => 'date',
        'commentaire_visa_direction_accueil' => 'string',
        'visa_rh' => 'boolean',
        'signataire_visa_rh' => 'string',
        'date_visa_rh' => 'date',
        'commentaire_date_visa_rh' => 'string',
        'niveaux_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required|string|max:191',
        'prenom' => 'required|string|max:191',
        'objet_contrat_id' => 'required',
        'date_debut_contrat' => 'required',
        'date_fin_contrat' => 'required',
        'motif_contrat_id' => 'required',
        'memo_fin_contrat' => 'required|string',
        'prolongation' => 'required|boolean',
        'motif_prolongation' => 'required|string',
        'duree_prolongation' => 'required|integer',
        'debut_periode_prolongation' => 'required',
        'fin_periode_prolongation' => 'required',
        'autre_equipement-travail' => 'required|string|max:191',
        'code_ethique' => 'required|boolean',
        'reglement_interieur' => 'required|boolean',
        'engagement_confidentialite' => 'required|boolean',
        'procedure' => 'required|boolean',
        'sensibilisation_qualite' => 'required|boolean',
        'signataire_sensibilisation_qualite' => 'required|string|max:191',
        'date_sensibilisation_qualite' => 'required',
        'commentaire_sensibilisation_qualite' => 'required|string',
        'sensibilisation_risque' => 'required|boolean',
        'signataire_sensibilisation_risque' => 'required|string|max:191',
        'date_sensibilisation_risque' => 'required',
        'commentaire_sensibilisation_risque' => 'required|string',
        'visa_direction_accueil' => 'required|boolean',
        'signataire_visa_direction_accueil' => 'required|boolean',
        'date_visa_direction_accueil' => 'required',
        'commentaire_visa_direction_accueil' => 'required|string',
        'visa_rh' => 'required|boolean',
        'signataire_visa_rh' => 'required|string|max:191',
        'date_visa_rh' => 'required',
        'commentaire_date_visa_rh' => 'required|string',
        'niveaux_id' => 'required',
        'user_id' => 'required',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
