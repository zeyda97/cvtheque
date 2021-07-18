<?php

namespace App\Repositories;

use App\Models\Experience;
use App\Repositories\BaseRepository;

/**
 * Class ExperienceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:39 pm UTC
*/

class ExperienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Experience::class;
    }
}
