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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Photo whereVisible($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    //
}
