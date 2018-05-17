<div style="text-decoration: underline;"><h3>Poll Answers</h3></div>
<table style="border: 1px solid black;border-collapse: collapse; padding: 5px;">
	<thead style="border: 1px solid black;border-collapse: collapse;">
		<th style="border: 1px solid black;border-collapse: collapse; padding: 5px;">Name of the program</th>
		<th style="border: 1px solid black;border-collapse: collapse; padding: 5px;">University</th>
		<th style="border: 1px solid black;border-collapse: collapse; padding: 5px;">Country</th>
		<th style="border: 1px solid black;border-collapse: collapse; padding: 5px;">Answer</th>
	</thead>
	<tbody style="border: 1px solid black;border-collapse: collapse;">
		@foreach($answers as $position => $answer)
			<tr>
				<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;">{{ $table_indicators[$position - 1]['name'] }}</td>
				<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;">{{ $table_indicators[$position - 1]['university'] }}</td>
				<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;">{{ $table_indicators[$position - 1]['country'] }}</td>
				<td style="border: 1px solid black;border-collapse: collapse; text-align: center;padding: 5px;">
					@if($answer == 'yes') Yes
					@else No
					@endif
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
<br>
<div style="text-decoration: underline;"> <h3>Poll Suggeted Programs</h3></div>
<table style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
	<thead style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
		<th style="border: 1px solid black;border-collapse: collapse; padding: 5px;">Program</th>
		<th style="border: 1px solid black;border-collapse: collapse; padding: 5px;"">Why?</th>
	</thead>
	<tbody style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
		@foreach($new_programs as $program => $why)
			<tr>
				<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;">{{ $program }}</td>
				<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;">{{ $why }}</td>
			</tr>
		@endforeach
	</tbody>
</table>