<?php

use Illuminate\Database\Seeder;
use App\CustomPoll;

class CustomPollsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CustomPoll::create([
            'name' => 'first',
            'description' => '<h2>BAM FORM #1</h2><h5>Postgraduate Program validation</h5><h4>To Experts Committee</h4>'
        ]);
    }
}
