<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Picture
 * 
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property int $is_active
 * @property string $name
 * @property string|null $meta
 * @property int $quantity
 * @property float $price
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Comment[] $comments
 * @property Collection|Like[] $likes
 * @property Collection|OrderDetail[] $order_details
 * @property Collection|Album[] $albums
 * @property Collection|PicturesTag[] $pictures_tags
 * @property Collection|Topic[] $topics
 * @property Collection|Product[] $products
 * @property Collection|ReportsPicture[] $reports_pictures
 *
 * @package App\Models
 */
class Picture extends Model
{
	protected $table = 'pictures';

	protected $casts = [
		'is_active' => 'int',
		'quantity' => 'int',
		'price' => 'float',
		'user_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'is_active',
		'name',
		'meta',
		'quantity',
		'price',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function likes()
	{
		return $this->hasMany(Like::class);
	}

	public function order_details()
	{
		return $this->hasMany(OrderDetail::class);
	}

	public function albums()
	{
		return $this->belongsToMany(Album::class, 'pictures_albums')
					->withTimestamps();
	}

	public function pictures_tags()
	{
		return $this->hasMany(PicturesTag::class);
	}

	public function topics()
	{
		return $this->belongsToMany(Topic::class, 'pictures_topics')
					->withTimestamps();
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'products_pictures')
					->withTimestamps();
	}

	public function reports_pictures()
	{
		return $this->hasMany(ReportsPicture::class);
	}
}
