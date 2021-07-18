<?php

namespace App\Repositories;

use App\Models\ObjetContrat;
use App\Repositories\BaseRepository;

/**
 * Class ObjetContratRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:42 pm UTC
*/

class ObjetContratRepository extends BaseRepository
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
        return ObjetContrat::class;
    }
}
