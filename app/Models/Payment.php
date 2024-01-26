<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Transaction[] $transactions
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';

	protected $fillable = [
		'name'
	];

	public function transactions()
	{
		return $this->hasMany(Transaction::class);
	}
}
