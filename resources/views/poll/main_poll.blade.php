@extends('layouts.poll1')
@section('content')
	<div id="poll_description">
		{!! $data['custom_poll']['description'] !!}
	</div>
    </br>
    <h3>
        <b id="indicator_title">
            {!! $data['indicator']['name'] !!}
        </b>
    </h3>

    <br>

    <p id="indicator_text">
        {!! $data['data_indicator']['main_text'] !!}
    </p>

    <br>

    <div id="indicator_body"></div>

    <button type="button" class="btn btn-md btn-block center next black-button" id="2">
        <b id="button-text">START</b>
    </button>

    <br>
    
    <div id="previous"></div>
    
    <br>

    <button type="button" class="btn btn-block help" data-toggle="popover" data-content="{{ $data['help_text'] }}">
        <b>HELP!</b>
    </button>
@stop