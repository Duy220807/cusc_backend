<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * 
 * @property int $id
 * @property string $comment
 * @property bool $is_active
 * @property int $user_id
 * @property int $picture_id
 * @property int $reply_to
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Picture $picture
 * @property User $user
 * @property Collection|Comment[] $comments
 * @property Collection|LikesComment[] $likes_comments
 * @property Collection|ReportsComment[] $reports_comments
 *
 * @package App\Models
 */
class Comment extends Model
{
	protected $table = 'comments';

	protected $casts = [
		'is_active' => 'bool',
		'user_id' => 'int',
		'picture_id' => 'int',
		'reply_to' => 'int'
	];

	protected $fillable = [
		'comment',
		'is_active',
		'user_id',
		'picture_id',
		'reply_to'
	];

	public function picture()
	{
		return $this->belongsTo(Picture::class);
	}

	public function comment()
	{
		return $this->belongsTo(Comment::class, 'reply_to');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class, 'reply_to');
	}

	public function likes_comments()
	{
		return $this->hasMany(LikesComment::class);
	}

	public function reports_comments()
	{
		return $this->hasMany(ReportsComment::class);
	}
}
