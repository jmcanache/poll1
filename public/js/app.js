 $(document).ready(function () {

 	let new_programs = {};
 	let answers = {};

 	$('[data-toggle="popover"]').popover();

 	 function ajaxCall(self, next_position){
 		const current_position = next_position - 1;
 		$.ajax({
            type: "GET",
            url: '/getNextPageInfo/'+ next_position,
            success: (data) => {
            	console.log(data);
            	
          		const indicator_title = $('#indicator_title');
            	const indicator_text = $('#indicator_text');
            	const button_text = $('#button-text');
            	const previous_button = `	<button type="button" class="btn btn-md btn-block prev">
						                    <b>&ltPREVIOUS</b>
						                </button>`;


				//Save values of anwers locally
          		if(self == 'next' && current_position == 2 ){
          			//answers[current_position] = $('input[name=study]:checked', '.qualify').val();
          			//explains[current_position] = answers[current_position] == 1 ? "" : $('.why').val();
          		}

          		//Set Title Indicator and Main text
            	indicator_title.html(data['indicator']['name']);
            	indicator_text.html(data['data_indicator']['main_text']);

            	//Hide Description if necessary and set new id for search values in database
            	next_position < 2 ? $('#poll_description').removeClass('hidden') : $('#poll_description').addClass('hidden');
            	$('.next').attr('id', data['indicator']['position'] + 1);
            	//$('#btn_edit, #btn_save').attr('indicator', data['indicator']['position']);
            	$('.next, .previous').blur();

            	//Set Button name depending on Indicator position
            	if(data['indicator']['position'] == 1) button_text.html('START');
            	else if(data['indicator']['position'] == 3) button_text.html('FINISH')
            	else button_text.html('NEXT');           

            	//Hide previous button if in first pahe
            	data['indicator']['position'] >= 2 ? $('#previous').html(previous_button) : $('#previous').empty();

            	//if = add HTML of all data poll for answer yes/not sure/not
            	//else if = add data for page of all indicators
            	//else if = add data for add indicator
            	//else remove data
            	if(data['indicator']['position'] == 2){
            		let table_info = "";

            		$.each(data['table_data'], (index, row) => {
            			let checked_yes = "";
            			let checked_no = "";
            			if(row['position'] in answers){
            				if(answers[row['position']] == 'yes') checked_yes = 'checked';
            				else checked_no = 'checked';
            			}
					    table_info = table_info + `<tr class="row_table" position="${row['position']}">
										                <td class="text-center">${row['name']}</td>
										                <td class="text-center">${row['university']}</td>
										                <td class="text-center">${row['country']}</td>
										                <td class="text-center"><input type="radio" class="radios" name="${'name'+row['position']}" id="${'yes_' + row['position']}" value="yes" ${checked_yes}></td>
										                <td class="text-center"><input type="radio" class="radios" name="${'name'+row['position']}" id="${'no_' + row['position']}" value="no" ${checked_no}></td>
										                <td class="text-center"><a href="${row['official_link']}" target="_blank" class="link"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
										                <td class="text-center"><a href="${row['bam_link']}" target="_blank" class="link"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></td>
										            </tr>`;
					});


            		let indicator_body = `
									    <table class="table table-striped">
									        <thead>
									            <tr>
									                <th class="text-center">
									                    <b id="th_1">${ data['common']['name'] }</b>
									                </th>
									                <th class="text-center">
									                    <b id="th_2">${ data['common']['university'] }</b>
									                </th>
									                <th class="text-center">
									                    <b id="th_2">${ data['common']['country'] }</b>
									                </th>
									                <th class="text-center">
									                    <b id="th_2">${ data['common']['first_question'] }</b>
									                </th>
									                <th class="text-center">
									                    <b id="th_2">${ data['common']['second_question'] }</b>
									                </th>
									                <th class="text-center">
									                    <b id="th_2">${ data['common']['official_link'] }</b>
									                </th>
									                <th class="text-center">
									                    <b id="th_2">${ data['common']['bam_link'] }</b>
									                </th>
									            </tr>
									        </thead>
									        <tbody>
									            ${table_info}
									        </tbody>
									    </table>

									    <br>
									    <br>`;

					$('#indicator_body').html(indicator_body);
            	}else if(data['indicator']['position'] == 3){
            		let current_prog = "";
            		$.each(new_programs, function(prog, why){
            			current_prog = current_prog + ` <div class="row_prog"><hr /><div class="row added_prog">
								 							<div class="col-sm-5 prog">${prog}</div>
								 							<div class="col-sm-6">${why}</div>
								 							<div class="col-sm-1 remove_prog"><span>x</span></div>
								 						</div></div>`;
            		});
 					$('#indicator_text').append(current_prog);

            		let indicator_body = `<div class="row add_programs">
            								<div class="col-sm-5"><input type="text" placeholder="Program..." id="prog_add"></div>
            								<div class="col-sm-7"><input type="text" placeholder="Why?" id="why_add"></div>
            								<div class="col-xs-12 text-right"><a href="#" id="add_prog"><h6><strong>Add indicator +</strong></h6></a></div>
            							</div></br></br>`;
            		$('#indicator_body').html(indicator_body);
            	}else{
            		$('#indicator_body').empty();
            	}
            	//scroll to top
            	if(data['indicator']['position'] == 4){
            		$('.next, .prev').addClass('hidden');
            	}
            	window.scrollTo(0, 0);
            }
        });
 	}

 	$('.next').click( () => {
 		let next_position = $('.next').attr('id');
 		
 		if(next_position == 4) {
 			$('.next, .prev').prop('disabled', true);
 			mail_data = {
 				'answers': answers,
 				'new_programs': new_programs,
 			};
 			$.ajax({
 				headers: {
		            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        },
 				url: '/send_mail',
				type: 'POST',
				dataType: 'json',
				data: mail_data,
	            success: (data) => {
	            	if(data['send'] == 1 ){
	            		console.log('data');
	            	}else{
	            		alert("Something wrong happened! Please try again.")
	            		$('.next, .prev').prop('disabled', false);
	            	}
	            }
        	})
 		}
 		//hide popover of help
 		$('[data-toggle="popover"]').popover('hide');

 		//Validacion para permitir que next avance
 		if(next_position == 3 && Object.keys(answers).length != 20){
 			$('.row_table').addClass('red');
 			$.each(answers, (position, value) => {
				$('.row_table[position='+ position +']').removeClass('red');
 			});
 			alert('Please Complete all the options');
 			return;
 		} 
       	ajaxCall('next', next_position);
 	});

 	$('body').on('click', '#add_prog', () => {
 		let program = $('#prog_add').val(); 
 		let why = $('#why_add').val(); 

 		if(why == '' || program == '') return;
 		let add_prog = `<div class="row_prog"><hr /><div class="row added_prog">
 							<div class="col-sm-5 program">${program}</div>
 							<div class="col-sm-6">${why}</div>
 							<div class="col-sm-1 remove_prog"><span>x</span></div>
 						</div></div>`;

 		$('#indicator_text').append(add_prog);
 		new_programs[program] = why;
 		$('#why_add').val('');
 		$('#prog_add').val('');
 	});

 	$('body').on('click', '.remove_prog', function() {
 		$(this).closest('.row_prog').find('hr').remove();
 		delete new_programs[$(this).closest('.row_prog').find('.prog').html()];
 		$(this).closest('.row_prog').remove();
 	});

 	$('body').on('click', '.prev', function() {
 		let next_position = $('.next').attr('id') - 2;
 		$('[data-toggle="popover"]').popover('hide');
 		ajaxCall('.prev', next_position);
 	})

 	$('body').on('click', '.radios', function(){
 		let position = $(this).closest('.row_table').attr('position');
 		let name_radio = 'name' + position;
 		let answer = $('input[name='+ name_radio +']:checked', '.row_table').val();
 		answers[position] = answer;
 	});
});
