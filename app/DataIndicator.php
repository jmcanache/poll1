<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataIndicator extends Model
{	
	/*********** Relationships Start **************/
    
    public function indicator()
    {
        return $this->belongsTo('App\Indicator');
    }

    /*********** Relationships End ***************/

    public static function updateDataIndicator($indi_id, $data){
		$data_indicator = self::where('indicator_id', $indi_id)->first();
		$data_indicator->main_text = trim($data['main_text']);
		$data_indicator->save();
    }
}
