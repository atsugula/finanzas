<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Category
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $input_type_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Budget[] $budgets
 * @property InputType $inputType
 * @property Objective[] $objectives
 * @property Transaction[] $transactions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Category extends Model
{
    use SoftDeletes;

    protected $table = 'category';

    static $rules = [
		'name' => 'required',
		'description' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','input_type_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgets()
    {
        return $this->hasMany('App\Models\Budget', 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inputType()
    {
        return $this->hasOne('App\Models\InputType', 'id', 'input_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objectives()
    {
        return $this->hasMany('App\Models\Objective', 'category_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'category_id', 'id');
    }


}
