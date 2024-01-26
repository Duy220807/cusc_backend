<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $quantity
 * @property int $total
 * @property int $transaction_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Transaction $transaction
 * @property Collection|OrderDetail[] $order_details
 * @property Collection|Review[] $reviews
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';

	protected $casts = [
		'quantity' => 'int',
		'total' => 'int',
		'transaction_id' => 'int'
	];

	protected $fillable = [
		'quantity',
		'total',
		'transaction_id'
	];

	public function transaction()
	{
		return $this->belongsTo(Transaction::class);
	}

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
}
