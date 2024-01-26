<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductsTopic
 * 
 * @property int $product_id
 * @property int $topic_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Product $product
 * @property Topic $topic
 *
 * @package App\Models
 */
class ProductsTopic extends Model
{
	protected $table = 'products_topics';
	public $incrementing = false;

	protected $casts = [
		'product_id' => 'int',
		'topic_id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'topic_id'
	];

	public function product()
	{
		return $this->belongsTo(Product::class);
	}

	public function topic()
	{
		return $this->belongsTo(Topic::class);
	}
}
