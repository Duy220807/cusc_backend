<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PicturesTag
 * 
 * @property int $picture_id
 * @property int $tag_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Picture $picture
 * @property TagsPicture $tags_picture
 *
 * @package App\Models
 */
class PicturesTag extends Model
{
	protected $table = 'pictures_tags';
	public $incrementing = false;

	protected $casts = [
		'picture_id' => 'int',
		'tag_id' => 'int'
	];

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}

	public function tags_picture()
	{
		return $this->belongsTo(TagsPicture::class, 'tag_id');
	}
}
