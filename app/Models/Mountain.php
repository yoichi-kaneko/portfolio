<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Mountain
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property string|null $url
 * @property float $latitude
 * @property float $longitude
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Mountain whereUrl($value)
 * @mixin \Eloquent
 */
class Mountain extends Model
{
    //
}
