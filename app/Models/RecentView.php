<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RecentView
 * 
 * @property int $id
 * @property int $user_id
 * @property int $product_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property User $user
 *
 * @package App\Models
 */
class RecentView extends Model
{
	protected $table = 'recent_views';

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
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
