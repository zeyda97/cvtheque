<?php

namespace App\Repositories;

use App\Models\Candidat;
use App\Repositories\BaseRepository;

/**
 * Class CandidatRepository
 * @package App\Repositories
 * @version July 12, 2021, 10:18 pm UTC
*/

class CandidatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Candidat::class;
    }
}
