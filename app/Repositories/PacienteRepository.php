<?php

namespace App\Repositories;

use App\Models\Paciente;
use App\Repositories\BaseRepository;

/**
 * Class PacienteRepository
 * @package App\Repositories
 * @version October 5, 2021, 2:21 am UTC
*/

class PacienteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ape_nom',
        'dni',
        'celular'
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
        return Paciente::class;
    }
}
