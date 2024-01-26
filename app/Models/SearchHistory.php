<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SearchHistory
 * 
 * @property int $id
 * @property string $keyword
 * @property int $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 *
 * @package App\Models
 */
class SearchHistory extends Model
{
	protected $table = 'search_histories';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'keyword',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
