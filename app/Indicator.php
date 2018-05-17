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
}
