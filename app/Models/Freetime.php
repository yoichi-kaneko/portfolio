<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Freetime
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon $date_from
 * @property \Illuminate\Support\Carbon|null $date_to
 * @property string $job_type
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereJobType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $code
 * @property string|null $url
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Freetime whereUrl($value)
 */
class Freetime extends Model
{
}
