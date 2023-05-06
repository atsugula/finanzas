<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Status
 *
 * @property $id
 * @property $name
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property BankAccount[] $bankAccounts
 * @property Budget[] $budgets
 * @property CreditCard[] $creditCards
 * @property Objective[] $objectives
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Status extends Model
{
    use SoftDeletes;

    protected $table = 'statuses';

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
    public function bankAccounts()
    {
        return $this->hasMany('App\Models\BankAccount', 'status_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function budgets()
    {
        return $this->hasMany('App\Models\Budget', 'status_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creditCards()
    {
        return $this->hasMany('App\Models\CreditCard', 'status_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function objectives()
    {
        return $this->hasMany('App\Models\Objective', 'status_id', 'id');
    }


}
