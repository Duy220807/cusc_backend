<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Album
 * 
 * @property int $id
 * @property string $name
 * @property bool $is_public
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Picture[] $pictures
 *
 * @package App\Models
 */
class Album extends Model
{
	protected $table = 'albums';

	protected $casts = [
		'is_public' => 'bool',
		'user_id' => 'int'
	];

	protected $fillable = [
		'name',
		'is_public',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function pictures()
	{
		return $this->belongsToMany(Picture::class, 'pictures_albums')
					->withTimestamps();
	}
}
