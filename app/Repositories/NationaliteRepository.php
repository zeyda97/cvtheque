<?php

namespace App\Repositories;

use App\Models\Nationalite;
use App\Repositories\BaseRepository;

/**
 * Class NationaliteRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:18 pm UTC
*/

class NationaliteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nom_pays',
        'nom_nationalite'
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
        return Nationalite::class;
    }
}
