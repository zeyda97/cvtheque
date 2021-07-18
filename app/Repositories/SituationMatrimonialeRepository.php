<?php

namespace App\Repositories;

use App\Models\SituationMatrimoniale;
use App\Repositories\BaseRepository;

/**
 * Class SituationMatrimonialeRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:20 pm UTC
*/

class SituationMatrimonialeRepository extends BaseRepository
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
        return SituationMatrimoniale::class;
    }
}
