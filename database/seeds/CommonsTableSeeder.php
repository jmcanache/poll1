<?php

use Illuminate\Database\Seeder;
use App\Common;

class CommonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Common::create([
            'name'   			=> 'Name of the program',
            'university'		=> 'University',
            'country'			=> 'Country',
            'first_question'	=> 'YES',
            'second_question'	=> 'NO',
            'official_link'		=> 'OFFICIAL',
            'bam_link'			=> 'BAM LINK',
            'help_text'	 		=> 'If you need some help from us, please contact info@bestarchitecturemasters.com',
        ]);
    }
}
