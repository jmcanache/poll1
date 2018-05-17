<?php

use Illuminate\Database\Seeder;
use App\Indicator;

class IndicatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

    	$indicators = [ 1 => 'POSTGRADUATE PROGRAMS TO EVALUATE', 
    					2 => 'POSTGRADUATE PROGRAMS TO EVALUATE', 
    					3 => 'SUGGESTED PROGRAMS FOR THE STUDY', 
    					4 => 'YOU HAVE FINISHED!'
    				];

        foreach ($indicators as $position => $name) {
			Indicator::create([
	            'name' => $name,
	            'position' => $position,
	        ]);
		}
    }
}
