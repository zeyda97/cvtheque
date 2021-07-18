<?php

namespace App\Repositories;

use App\Models\TypeExperience;
use App\Repositories\BaseRepository;

/**
 * Class TypeExperienceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:34 pm UTC
*/

class TypeExperienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle',
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
        return TypeExperience::class;
    }
}
