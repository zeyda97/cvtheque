<?php

namespace App\Repositories;

use App\Models\Justificatif;
use App\Repositories\BaseRepository;

/**
 * Class JustificatifRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:37 pm UTC
*/

class JustificatifRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type_justificatif_id',
        'fichier',
        'experience_id',
        'user_id',
        'langue_id',
        'competence_id',
        'formation_id'
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
        return Justificatif::class;
    }
}
