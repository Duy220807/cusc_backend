<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentsProfile
 * 
 * @property int $id
 * @property string $comment
 * @property int $profile_id
 * @property int $user_id
 * @property int $reply_to
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property CommentsProfile $comments_profile
 * @property Collection|CommentsProfile[] $comments_profiles
 * @property Collection|LikesCommentsProfile[] $likes_comments_profiles
 * @property Collection|ReportsCommentsProfile[] $reports_comments_profiles
 *
 * @package App\Models
 */
class CommentsProfile extends Model
{
	protected $table = 'comments_profiles';

	protected $casts = [
		'profile_id' => 'int',
		'user_id' => 'int',
		'reply_to' => 'int'
	];

	protected $fillable = [
		'comment',
		'profile_id',
		'user_id',
		'reply_to'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments_profile()
	{
		return $this->belongsTo(CommentsProfile::class, 'reply_to');
	}

	public function comments_profiles()
	{
		return $this->hasMany(CommentsProfile::class, 'reply_to');
	}

	public function likes_comments_profiles()
	{
		return $this->hasMany(LikesCommentsProfile::class, 'comment_profile_id');
	}

	public function reports_comments_profiles()
	{
		return $this->hasMany(ReportsCommentsProfile::class, 'comment_profile_id');
	}
}
