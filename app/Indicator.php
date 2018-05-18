<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indicator extends Model
{
    /*********** Relationships Start **************/

	public function dataIndicator()
    {
        return $this->hasOne('App\DataIndicator');
    }

    public function tableIndicators()
    {
        return $this->hasMany('App\TableIndicator');
    }

    /*********** Relationships End ***************/

    public static function getIndicatorByPosition($position){
        return self::where('position', $position)->first();
    }

    public static function updateIndicator($data){
        $indicator = self::getIndicatorByPosition($data['position']);
        $indicator->name = trim($data['name']);
        $indicator->save();
    }
}
