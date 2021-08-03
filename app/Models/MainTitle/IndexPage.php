<?php

namespace App\Models\MainTitle;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class IndexPage
 * @package App\Models
 *
 * @property integer $id
 * @property string $title
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class IndexPage extends Model
{
    use HasFactory;
}
