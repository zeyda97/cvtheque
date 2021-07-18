<?php

namespace App\Repositories;

use App\Models\DepartementResidence;
use App\Repositories\BaseRepository;

/**
 * Class DepartementResidenceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:23 pm UTC
*/

class DepartementResidenceRepository extends BaseRepository
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
        return DepartementResidence::class;
    }
}
