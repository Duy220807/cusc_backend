<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $quantity
 * @property float $price
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|HistoriesPosition[] $histories_positions
 * @property Collection|OrderDetail[] $order_details
 * @property Collection|Picture[] $pictures
 * @property Collection|ProductsTag[] $products_tags
 * @property Collection|Topic[] $topics
 * @property Collection|RecentView[] $recent_views
 * @property Collection|ReportsProduct[] $reports_products
 * @property Collection|Review[] $reviews
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'quantity' => 'int',
		'price' => 'float',
		'user_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'quantity',
		'price',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function histories_positions()
	{
		return $this->hasMany(HistoriesPosition::class);
	}

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}

	public function pictures()
	{
		return $this->belongsToMany(Picture::class, 'products_pictures')
					->withTimestamps();
	}

	public function products_tags()
	{
		return $this->hasMany(ProductsTag::class);
	}

	public function topics()
	{
		return $this->belongsToMany(Topic::class, 'products_topics')
					->withTimestamps();
	}

	public function recent_views()
	{
		return $this->hasMany(RecentView::class);
	}

	public function reports_products()
	{
		return $this->hasMany(ReportsProduct::class);
	}

	public function reviews()
	{
		return $this->hasMany(Review::class);
	}
}
