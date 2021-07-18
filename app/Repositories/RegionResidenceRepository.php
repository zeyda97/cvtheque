<?php

namespace App\Repositories;

use App\Models\RegionResidence;
use App\Repositories\BaseRepository;

/**
 * Class RegionResidenceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:22 pm UTC
*/

class RegionResidenceRepository extends BaseRepository
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
        return RegionResidence::class;
    }
}
