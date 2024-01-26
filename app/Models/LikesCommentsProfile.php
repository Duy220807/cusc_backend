<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LikesCommentsProfile
 * 
 * @property int $id
 * @property int $user_id
 * @property int $comment_profile_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property CommentsProfile $comments_profile
 * @property User $user
 *
 * @package App\Models
 */
class LikesCommentsProfile extends Model
{
	protected $table = 'likes_comments_profiles';

	protected $casts = [
		'user_id' => 'int',
		'comment_profile_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'comment_profile_id'
	];

	public function comments_profile()
	{
		return $this->belongsTo(CommentsProfile::class, 'comment_profile_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
