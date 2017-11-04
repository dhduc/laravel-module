<?php

namespace Unet\Module\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Module
 *
 * @package Unet\Module\Http\Models
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Unet\Module\Http\Models\Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Unet\Module\Http\Models\Module whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Unet\Module\Http\Models\Module whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Unet\Module\Http\Models\Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Unet\Module\Http\Models\Module whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Unet\Module\Http\Models\Module whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Module extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];
    protected $table = 'module';
    public $fillable = ['name', 'email', 'description'];
    public $timestamps = true;
}
