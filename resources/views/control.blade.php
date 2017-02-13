@extends('layouts.dashboard')
@section('title','Control')
@section('page_heading','控制開關')
@section('section')
<div class="col-sm-6">
		@section ('5button_panel_title','Device #1')
		@section ('5button_panel_body')
			<h4>Control Buttons</h4>
			<p>
            <a class="btn btn-info" href="{{ url('control/on')}}"><i class="fa fa-check"></i></a>
	 	    <a class="btn btn-warning" href="{{ url('control/off')}}"><i class="fa fa-times"></i></a>
			</p>
			<br>
		@endsection
		@include('widgets.panel', array('as'=>'5button', 'header'=>true))
	</div>

@stop
