<?php

namespace App\Repositories;

use App\Models\Adresse;
use App\Repositories\BaseRepository;

/**
 * Class AdresseRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:32 pm UTC
*/

class AdresseRepository extends BaseRepository
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
        return Adresse::class;
    }
}
