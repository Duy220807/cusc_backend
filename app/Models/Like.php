<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Like
 * 
 * @property int $id
 * @property int $user_id
 * @property int $picture_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Picture $picture
 * @property User $user
 *
 * @package App\Models
 */
class Like extends Model
{
	protected $table = 'likes';

	protected $casts = [
		'user_id' => 'int',
		'picture_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'picture_id'
	];

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
