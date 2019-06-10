<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Work
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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereDateFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereDateTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereJobType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Work whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Work extends Model
{
    protected $table = 'works';
    protected $dates = ['date_from', 'date_to'];
}
