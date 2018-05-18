<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomPoll extends Model
{
    public static function updateDescription($cp_data){
        $cp = self::all()->first();
        $cp->description = $cp_data;
        $cp->save();
    }
}
