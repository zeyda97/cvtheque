<?php

namespace App\Repositories;

use App\Models\Poste;
use App\Repositories\BaseRepository;

/**
 * Class PosteRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:35 pm UTC
*/

class PosteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'libelle',
        'user_id'
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
        return Poste::class;
    }
}
