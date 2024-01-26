<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TagsPicture
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|PicturesTag[] $pictures_tags
 *
 * @package App\Models
 */
class TagsPicture extends Model
{
	protected $table = 'tags_pictures';

	protected $fillable = [
		'name'
	];

	public function pictures_tags()
	{
		return $this->hasMany(PicturesTag::class, 'tag_id');
	}
}
