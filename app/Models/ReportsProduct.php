<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportsProduct
 * 
 * @property int $id
 * @property string $description
 * @property string $status
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
class ReportsProduct extends Model
{
	protected $table = 'reports_products';

	protected $casts = [
		'user_id' => 'int',
		'product_id' => 'int'
	];

	protected $fillable = [
		'description',
		'status',
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
