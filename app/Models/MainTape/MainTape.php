<?php

namespace App\Models\MainTape;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MainTape
 * @package App\Models
 *
 * @property integer $id
 * @property string $img
 * @property string $title
 * @property string $description_min
 * @property string $description_max
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class MainTape extends Model
{
    use HasFactory;
}
