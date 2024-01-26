<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PicturesAlbum
 * 
 * @property int $album_id
 * @property int $picture_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Album $album
 * @property Picture $picture
 *
 * @package App\Models
 */
class PicturesAlbum extends Model
{
	protected $table = 'pictures_albums';
	public $incrementing = false;

	protected $casts = [
		'album_id' => 'int',
		'picture_id' => 'int'
	];

	public function album()
	{
		return $this->belongsTo(Album::class);
	}

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}
}
