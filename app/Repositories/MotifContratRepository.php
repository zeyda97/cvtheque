<?php

namespace App\Repositories;

use App\Models\MotifContrat;
use App\Repositories\BaseRepository;

/**
 * Class MotifContratRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:41 pm UTC
*/

class MotifContratRepository extends BaseRepository
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
        return MotifContrat::class;
    }
}
