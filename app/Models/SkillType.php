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
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SkillType whereVisible($value)
 * @mixin \Eloquent
 */
class SkillType extends Model
{
    //
}
