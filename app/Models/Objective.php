<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Objective
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $category_id
 * @property $date_start
 * @property $date_end
 * @property $amount
 * @property $cumulative_savings
 * @property $progress
 * @property $status_id
 * @property $notes
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property Status $status
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Objective extends Model
{
    use SoftDeletes;

    protected $table = 'objectives';

    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'date_start' => 'required',
		'date_end' => 'required',
		'amount' => 'required',
		'cumulative_savings' => 'required',
		'progress' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','category_id','date_start','date_end','amount','cumulative_savings','progress','status_id','notes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }


}
