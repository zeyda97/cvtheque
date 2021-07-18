<?php

namespace App\Repositories;

use App\Models\Niveaux;
use App\Repositories\BaseRepository;

/**
 * Class NiveauxRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:40 pm UTC
*/

class NiveauxRepository extends BaseRepository
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
        return Niveaux::class;
    }
}
