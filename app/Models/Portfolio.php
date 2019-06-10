<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Portfolio
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $visible
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Portfolio whereVisible($value)
 * @mixin \Eloquent
 */
class Portfolio extends Model
{
    //
}
