<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Common extends Model
{
    public static function updateCommonData($common_data){
    	$common = self::All()->first();
    	
    	if(array_has($common_data,'name')) 				$common->name = trim($common_data['name']);
		if(array_has($common_data, 'university')) 	  	$common->university = trim($common_data['university']);
		if(array_has($common_data, 'country')) 	  		$common->country = trim($common_data['country']);
		if(array_has($common_data, 'first_question')) 	$common->first_question = trim($common_data['first_question']);
		if(array_has($common_data, 'second_question')) 	$common->second_question = trim($common_data['second_question']);
		if(array_has($common_data, 'official_link')) 	$common->official_link = trim($common_data['official_link']);
		if(array_has($common_data, 'bam_link')) 		$common->bam_link = trim($common_data['bam_link']);
		if(array_has($common_data, 'help_text'))    	$common->help_text = trim($common_data['help_text']);
		$common->save();
    }
}
