<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PositionsType
 * 
 * @property int $id
 * @property string $name
 * @property float $fee
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class PositionsType extends Model
{
	protected $table = 'positions_types';

	protected $casts = [
		'fee' => 'float'
	];

	protected $fillable = [
		'name',
		'fee'
	];
}
