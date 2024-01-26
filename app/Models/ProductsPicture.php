<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsPicture
 * 
 * @property int $product_id
 * @property int $picture_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Picture $picture
 * @property Product $product
 *
 * @package App\Models
 */
class ProductsPicture extends Model
{
	protected $table = 'products_pictures';
	public $incrementing = false;

	protected $casts = [
		'product_id' => 'int',
		'picture_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'picture_id'
	];

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
