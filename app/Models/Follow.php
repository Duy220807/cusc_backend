<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Follow
 * 
 * @property int $id
 * @property int $from_user_id
 * @property int $to_user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class Follow extends Model
{
	protected $table = 'follows';

	protected $casts = [
		'from_user_id' => 'int',
		'to_user_id' => 'int'
	];

	protected $fillable = [
		'from_user_id',
		'to_user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'to_user_id');
	}
}
