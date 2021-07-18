<?php

namespace App\Repositories;

use App\Models\CommuneResidence;
use App\Repositories\BaseRepository;

/**
 * Class CommuneResidenceRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:24 pm UTC
*/

class CommuneResidenceRepository extends BaseRepository
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
        return CommuneResidence::class;
    }
}
