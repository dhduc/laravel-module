<?php

namespace Unet\Module\Http\Repository;

use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class ModuleRepository
 * @package Unet\Module\Http\Repository
 */
class ModuleRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return \Unet\Module\Http\Models\Module::class;
    }
}
