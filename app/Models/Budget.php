<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Budget
 *
 * @property $id
 * @property $name
 * @property $category_id
 * @property $amount
 * @property $period_of_time
 * @property $date_start
 * @property $date_end
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
class Budget extends Model
{
    use SoftDeletes;

    protected $table = 'budgets';

    static $rules = [
		'name' => 'required',
		'amount' => 'required',
		'period_of_time' => 'required',
		'date_start' => 'required',
		'date_end' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','category_id','amount','period_of_time','date_start','date_end','status_id','notes'];


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
