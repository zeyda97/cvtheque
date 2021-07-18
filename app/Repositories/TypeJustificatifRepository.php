<?php

namespace App\Repositories;

use App\Models\TypeJustificatif;
use App\Repositories\BaseRepository;

/**
 * Class TypeJustificatifRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:43 pm UTC
*/

class TypeJustificatifRepository extends BaseRepository
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
        return TypeJustificatif::class;
    }
}
