<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 *
 * @property $id
 * @property $date
 * @property $bank_account_id
 * @property $credit_card_id
 * @property $category_id
 * @property $description
 * @property $value
 * @property $type_transaction
 * @property $account_balance
 * @property $notes
 * @property $user_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property BankAccount $bankAccount
 * @property Category $category
 * @property CreditCard $creditCard
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Transaction extends Model
{
    use SoftDeletes;

    protected $table = 'transactions';

    static $rules = [
		'date' => 'required',
		'description' => 'required',
		'value' => 'required',
		'type_transaction' => 'required',
		'account_balance' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date','bank_account_id','credit_card_id','category_id','description','value','type_transaction','account_balance','notes','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bankAccount()
    {
        return $this->hasOne('App\Models\BankAccount', 'id', 'bank_account_id');
    }

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
    public function creditCard()
    {
        return $this->hasOne('App\Models\CreditCard', 'id', 'credit_card_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}
