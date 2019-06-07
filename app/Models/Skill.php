<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public static function get_by_each_types()
    {
        $ret = [];

        $skills = self::orderBy('id', 'asc')->get();

        foreach ($skills as $skill) {
            if (empty($ret[$skill->type])) {
                $ret[$skill->type] = [];
            }
            $ret[$skill->type][] = $skill;
        }

        return $ret;
    }
}
