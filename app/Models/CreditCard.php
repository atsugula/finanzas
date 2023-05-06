<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CreditCard
 *
 * @property $id
 * @property $name
 * @property $number_card
 * @property $date_expiration
 * @property $date_limit
 * @property $current_balance
 * @property $interest_rate
 * @property $cut_off_date
 * @property $date_paid
 * @property $status_id
 * @property $notes
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Status $status
 * @property Transaction[] $transactions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CreditCard extends Model
{
    use SoftDeletes;

    protected $table = 'credit_cards';

    static $rules = [
		'name' => 'required',
		'number_card' => 'required',
		'date_expiration' => 'required',
		'date_limit' => 'required',
		'current_balance' => 'required',
		'interest_rate' => 'required',
		'cut_off_date' => 'required',
		'date_paid' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','number_card','date_expiration','date_limit','current_balance','interest_rate','cut_off_date','date_paid','status_id','notes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Transaction', 'credit_card_id', 'id');
    }


}
