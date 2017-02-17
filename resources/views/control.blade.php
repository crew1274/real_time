@extends('layouts.dashboard')
@section('title','Control')
@section('page_heading','卸載群組設定')
@section('section')
<div class="col-sm-6">
		@section ('5button_panel_title','卸載群組')
		@section ('5button_panel_body')
	@foreach($json['control'] as $json)

	@endforeach
			<h4>test</h4>
			<p>
            <a class="btn btn-info" href="{{ url('offload/on')}}">
			<i class="fa fa-check"></i></a>

	 	    <a class="btn btn-warning" href="{{ url('control/off')}}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endsection
		@include('widgets.panel', array('as'=>'5button', 'header'=>true))
	</div>

<div class="col-sm-6">
@section ('6button_panel_title','非卸載群組')
		@section ('6button_panel_body')
			<h4>Normal Circle Buttons</h4>
	    	
		@endsection
		@include('widgets.panel', array('as'=>'6button', 'header'=>true))
</div>
@stop
