<?php

namespace App\Repositories;

use App\Models\TypeCandidature;
use App\Repositories\BaseRepository;

/**
 * Class TypeCandidatureRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:31 pm UTC
*/

class TypeCandidatureRepository extends BaseRepository
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
        return TypeCandidature::class;
    }
}
