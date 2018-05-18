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

    public static function insertNewData($data){
    	$table_indicator = self::where('position', $data['position'])->first();
    	$table_indicator->name = trim($data['name']);
    	$table_indicator->university = trim($data['university']);
    	$table_indicator->country = trim($data['country']);
    	$table_indicator->official_link = trim($data['official_link']);
    	$table_indicator->bam_link = trim($data['bam_link']);
    	$table_indicator->save();
    }
}
