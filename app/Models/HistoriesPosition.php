<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistoriesPosition
 * 
 * @property Carbon $start_time
 * @property Carbon $expire_time
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $user_id
 * @property int $product_id
 * @property int $id
 * 
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class HistoriesPosition extends Model
{
	protected $table = 'histories_positions';

	protected $casts = [
		'start_time' => 'datetime',
		'expire_time' => 'datetime',
		'user_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'start_time',
		'expire_time',
		'user_id',
		'product_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
