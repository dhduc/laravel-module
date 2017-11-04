<?php

namespace Unet\Module\Http\Helpers;

/**
 * Class Data
 * @package Unet\Module\Http\Helpers
 */
class Data
{
    /**
     * @param $model
     * @param $data
     */
    public function autoAssignDataToProperty($model, $data)
    {
        $properties = $model->properties;
        foreach ($properties as $property) {
            foreach ($data as $key => $value) {
                if ($key == $property) {
                    $model->$property = $data[$key];
                } else {
                }
            }
        }
    }
}