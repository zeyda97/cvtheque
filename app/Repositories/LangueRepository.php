<?php

namespace App\Repositories;

use App\Models\Langue;
use App\Repositories\BaseRepository;

/**
 * Class LangueRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:33 pm UTC
*/

class LangueRepository extends BaseRepository
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
        return Langue::class;
    }
}
