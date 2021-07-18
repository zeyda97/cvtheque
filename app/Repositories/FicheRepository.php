<?php

namespace App\Repositories;

use App\Models\Fiche;
use App\Repositories\BaseRepository;

/**
 * Class FicheRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:44 pm UTC
*/

class FicheRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fiche::class;
    }
}
