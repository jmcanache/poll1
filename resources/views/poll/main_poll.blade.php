@extends('layouts.poll1')
@section('content')
    <div>
        @if($edit_active) 
            <div class="text-right">
                    <button type="button" class="btn btn-warning" id="btn_edit" indicator="1">Edit</button>
                    <button type="button" class="btn btn-success" id="btn_save" indicator="1" disabled="true">Save</button>
                    <button type="button" class="btn btn-danger"  id="btn_cancel" indicator="1" disabled="true">Cancel</button>
            </div>
            <br>
        @endif
    </div>
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
    @if($edit_active) 
        <div class="help_text hidden">
            <br>
            <h4>Type in the next box to edit the information of the help button.</h4>
            <textarea class="help_text_area" cols="10" rows="2" placeholder="Type here...">{{ $data['help_text'] }}</textarea>
            <br>
        </div>
    @endif
@stop