<?php

namespace App\Repositories;

use App\Models\Competence;
use App\Repositories\BaseRepository;

/**
 * Class CompetenceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:38 pm UTC
*/

class CompetenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_competence_id',
        'niveaux_id',
        'user_id',
        'annee'
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
        return Competence::class;
    }
}
