<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsTag
 * 
 * @property int $product_id
 * @property int $tag_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property TagsProduct $tags_product
 *
 * @package App\Models
 */
class ProductsTag extends Model
{
	protected $table = 'products_tags';
	public $incrementing = false;

	protected $casts = [
		'product_id' => 'int',
		'tag_id' => 'int'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function tags_product()
	{
		return $this->belongsTo(TagsProduct::class, 'tag_id');
	}
}
