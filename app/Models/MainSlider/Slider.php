<?php

namespace App\Models\MainSlider;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Slider
 * @package App\Models
 *
 * @property integer $id
 * @property string $title
 * @property string $img
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Slider extends Model
{
    use HasFactory;
}
