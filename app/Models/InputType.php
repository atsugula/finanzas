<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class InputType
 *
 * @property $id
 * @property $name
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Category[] $categories
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class InputType extends Model
{
    use SoftDeletes;

    protected $table = 'input_type';

    static $rules = [
		'name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'input_type_id', 'id');
    }


}
