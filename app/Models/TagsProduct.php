<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TagsProduct
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ProductsTag[] $products_tags
 *
 * @package App\Models
 */
class TagsProduct extends Model
{
	protected $table = 'tags_products';

	protected $fillable = [
		'name'
	];

	public function products_tags()
	{
		return $this->hasMany(ProductsTag::class, 'tag_id');
	}
}
