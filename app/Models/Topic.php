<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Topic
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Picture[] $pictures
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class Topic extends Model
{
	protected $table = 'topics';

	protected $fillable = [
		'name'
	];

	public function pictures()
	{
		return $this->belongsToMany(Picture::class, 'pictures_topics')
					->withTimestamps();
	}

	public function products()
	{
		return $this->belongsToMany(Product::class, 'products_topics')
					->withTimestamps();
	}
}
