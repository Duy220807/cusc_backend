<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderDetail
 * 
 * @property int $id
 * @property float $price
 * @property int $picture_id
 * @property int $product_id
 * @property int $order_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Order $order
 * @property Picture $picture
 * @property Product $product
 *
 * @package App\Models
 */
class OrderDetail extends Model
{
	protected $table = 'order_details';

	protected $casts = [
		'price' => 'float',
		'picture_id' => 'int',
		'product_id' => 'int',
		'order_id' => 'int'
	];

	protected $fillable = [
		'price',
		'picture_id',
		'product_id',
		'order_id'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
