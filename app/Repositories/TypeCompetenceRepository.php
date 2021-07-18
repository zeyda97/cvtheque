<?php

namespace App\Repositories;

use App\Models\TypeCompetence;
use App\Repositories\BaseRepository;

/**
 * Class TypeCompetenceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:40 pm UTC
*/

class TypeCompetenceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle'
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
        return TypeCompetence::class;
    }
}
