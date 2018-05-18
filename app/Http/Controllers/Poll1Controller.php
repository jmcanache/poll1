<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Indicator;
use App\CustomPoll;
use App\DataIndicator;
use App\Common;
use App\TableIndicator;
use Mail;
use Log;

class Poll1Controller extends Controller
{
    public function index(){
    	$data = $this->indexAlgotirhm();
    	return view('poll/main_poll', array('data' => $data, 'edit_active' => false));
    }

    public function index_edit(){
    	$data = $this->indexAlgotirhm();
    	return view('poll/main_poll', array('data' => $data, 'edit_active' => true));
    }

    public function getNextPageInfo($next_position){
    	$indicator = Indicator::where('position', (int)$next_position)->first();
    	$data_indicator = DataIndicator::where('indicator_id', $indicator->id)->first();

    	$common_data = [];
    	$table_data = [];

    	if($indicator->position == 2){
    		$common_data = Common::All()->first();
    		$table_data = TableIndicator::where('indicator_id', $indicator->id)->orderBy('position', 'asc')->get();
    	}

    	return response()->json(array('indicator' => $indicator, 'data_indicator' => $data_indicator, 'common' => $common_data, 'table_data' => $table_data));
   	}

   	public function send_mail(Request $request){
    	$table_indicator = TableIndicator::orderBy('position', 'asc')->get();
    	$new_programs = array_has($request, 'new_programs') ? $request['new_programs'] : [];
        try{
	        Mail::send('emails.email_poll', ['answers' => $request['answers'], 'new_programs' => $new_programs, 'table_indicators' => $table_indicator], function ($m) {
	            $m->from('bam-noreply@bestarchitecturemasters.com', 'BAM');
	            $m->to('info@bestarchitecturemasters.com', 'BAM')->subject('BAM FORM #1');
	        });
	    }catch(\Exception $e){
	    	Log::debug($e);
		    return response()->json(array('send' => 0));
		}
		return response()->json(array('send' => 1));
    }

    public function edit_data(Request $request){
    	try{
	    	$indicator = Indicator::getIndicatorByPosition($request['indicator']['position']);

	    	//Update description field in Custom_poll Table
	    	if(array_has($request['custom_polls'], 'description')) CustomPoll::updateDescription(trim($request['custom_polls']['description']));
	    	
	    	//Update Indicator table
	    	if(array_has($request, 'indicator')) Indicator::updateIndicator($request['indicator']);
	    	
	    	//Update DataIndicator table
	    	if(array_has($request, 'data_indicator')) DataIndicator::updateDataIndicator($indicator->id, $request['data_indicator']);
	    	
	    	//Update Common table
	    	if(array_has($request, 'common')) Common::updateCommonData($request['common']);
			
	    	//Update TableIndicator table
	    	if(array_has($request, 'table_indicators')) foreach ($request['table_indicators'] as $row) TableIndicator::insertNewData($row);

    	}catch(\Exception $e){
    		Log::debug($e);
		    return response()->json(array('edited' => 0));
		}
    	return response()->json(array('edited' => 1));
    }

   	private function indexAlgotirhm(){
    	$custom_poll = CustomPoll::where('name', 'first')->first();
    	$indicator = Indicator::where('position', 1)->first();
    	$data_indicator = DataIndicator::where('indicator_id', $indicator->id)->first();
    	$help_text = Common::All()->pluck('help_text')->first();
    	return ['custom_poll' => $custom_poll, 'indicator' => $indicator, 'data_indicator' => $data_indicator, 'help_text' => $help_text];
    }
}
