<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableIndicator extends Model
{
	/*********** Relationships Start **************/
    
    public function indicator()
    {
        return $this->belongsTo('App\Indicator');
    }

    /*********** Relationships End ***************/
}
