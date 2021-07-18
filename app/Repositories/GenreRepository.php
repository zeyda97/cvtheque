<?php

namespace App\Repositories;

use App\Models\Genre;
use App\Repositories\BaseRepository;

/**
 * Class GenreRepository
 * @package App\Repositories
 * @version July 6, 2021, 11:17 pm UTC
*/

class GenreRepository extends BaseRepository
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
        return Genre::class;
    }
}
