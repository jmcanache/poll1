<?php

use Illuminate\Database\Seeder;
use App\Indicator;
use App\DataIndicator;

class DataIndicatorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicators_id = Indicator::orderBy('position', 'asc')->get();
        $texts = [	'Dear Expert, welcome to BAM Form for postgraduate program selection and validation.</br></br>
					Different postgraduate study programs have been selected from the best architecture schools
					in the world`s present year edition of the QS Ranking by Subjects. To promote diversity,
					universities from Asia, Latin America and Africa have been added. This poses an international
					comparative study, that reflects the best programs from different parts of the world.</br></br>
					Too specific programs have been initially discarded, as an integral and transversal further
					educational is the common parameter that allows a proper comparison of the programs.</br></br>
					<strong>BAM FORM #1 aims to know your opinion as part of the Experts Committee about the
					postgraduate programs that the BAM Team has selected for the 2018 edition.</strong></br></br>
					If necessary, you can suggest other programs which should be added or discarded.',

					'The following is a list of architecture postgraduate programs to be evaluated for the BAM 2018
					edition. Please, select the options YES / NO on each program if you agree with its selection.</br></br>
					If you need more information about the program, you can click on the icon and go to the
					official website of the university and also the brief of the BAM Team.',

					'If you consider we are missing an architectural postgraduate program to evaluate,
					please indicate it in the following field:',

					'Thank you very much for your collaboration for the BAM Ranking.</br></br>
					We will check the information you have provided and the results of the study will be
					updated at: <h3><strong>www.bestarchitecturemasters.com</strong></h3>'
        ];

        foreach ($texts as $index => $text) {
        	$indi_id = $indicators_id[$index]->id;
        	DataIndicator::create([
	        	'indicator_id' => $indi_id,
	            'main_text' => $text,
	        ]);
        }
    }
}
