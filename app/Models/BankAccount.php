<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BankAccount
 *
 * @property $id
 * @property $name_account
 * @property $type_account
 * @property $institution
 * @property $number_account
 * @property $current_balance
 * @property $interest_rate
 * @property $cut_off_date
 * @property $date_paid
 * @property $user_id
 * @property $status_id
 * @property $notes
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Status $status
 * @property Transaction[] $transactions
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class BankAccount extends Model
{
    use SoftDeletes;

    protected $table = 'bank_accounts';

    static $rules = [
		'name_account' => 'required',
		'type_account' => 'required',
		'institution' => 'required',
		'number_account' => 'required',
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
    protected $fillable = ['name_account','type_account','institution','number_account','current_balance','interest_rate','cut_off_date','date_paid','user_id','status_id','notes'];


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
        return $this->hasMany('App\Models\Transaction', 'bank_account_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}
