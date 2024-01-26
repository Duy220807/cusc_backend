<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PicturesTopic
 * 
 * @property int $picture_id
 * @property int $topic_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Picture $picture
 * @property Topic $topic
 *
 * @package App\Models
 */
class PicturesTopic extends Model
{
	protected $table = 'pictures_topics';
	public $incrementing = false;

	protected $casts = [
		'picture_id' => 'int',
		'topic_id' => 'int'
	];

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}

	public function topic()
	{
		return $this->belongsTo(Topic::class);
	}
}
