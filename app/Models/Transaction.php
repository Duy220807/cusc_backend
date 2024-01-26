<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $amount
 * @property string $transaction_number
 * @property int $payment_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Payment $payment
 * @property Collection|Order[] $orders
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transactions';

	protected $casts = [
		'amount' => 'int',
		'payment_id' => 'int'
	];

	protected $fillable = [
		'amount',
		'transaction_number',
		'payment_id'
	];

	public function payment()
	{
		return $this->belongsTo(Payment::class);
	}

	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}
