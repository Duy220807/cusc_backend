<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportsComment
 * 
 * @property int $id
 * @property string $description
 * @property string $status
 * @property int $user_id
 * @property int $comment_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Comment $comment
 * @property User $user
 *
 * @package App\Models
 */
class ReportsComment extends Model
{
	protected $table = 'reports_comments';

	protected $casts = [
		'user_id' => 'int',
		'comment_id' => 'int'
	];

	protected $fillable = [
		'description',
		'status',
		'user_id',
		'comment_id'
	];

	public function comment()
	{
		return $this->belongsTo(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
