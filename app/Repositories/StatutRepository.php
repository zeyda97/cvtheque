<?php

namespace App\Repositories;

use App\Models\Statut;
use App\Repositories\BaseRepository;

/**
 * Class StatutRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:25 pm UTC
*/

class StatutRepository extends BaseRepository
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
        return Statut::class;
    }
}
