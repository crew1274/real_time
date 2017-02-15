@extends('layouts.dashboard')
@section('title','Control')
@section('page_heading','卸載群組設定')
@section('section')

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('dangerous'))
    <div class="alert alert-dangerous">
        <p>{{ $message }}</p>
    </div>
    @endif

<div class="col-sm-6">
		@section ('5button_panel_title','卸載群組')
		@section ('5button_panel_body')
		@if ( $last -> group1  == 1)
			<h4>群組#1</h4>
			<p>
	 	    <a class="btn btn-warning" href="{{ url('offload/off/1') }}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group2  == 1)
			<h4>群組#2</h4>
			<p>
	 	    <a class="btn btn-warning" href="{{ url('offload/off/2') }}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group3  == 1)
			<h4>群組#3</h4>
			<p>
	 	    <a class="btn btn-warning" href="{{ url('offload/off/3') }}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group4  == 1)
			<h4>群組#4</h4>
			<p>
	 	    <a class="btn btn-warning" href="{{ url('offload/off/4') }}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group5  == 1)
			<h4>群組#5</h4>
			<p>
	 	    <a class="btn btn-warning" href="{{ url('offload/off/5') }}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group6  == 1)
			<h4>群組#6</h4>
			<p>
	 	    <a class="btn btn-warning" href="{{ url('offload/off/6') }}">
			<i class="fa fa-times"></i></a>
			</p>
			<br>
		@endif
		@endsection
		@include('widgets.panel', array('as'=>'5button', 'header'=>true))
	</div>

<div class="col-sm-6">
@section ('6button_panel_title','非卸載群組')
		@section ('6button_panel_body')
	    @if ( $last -> group1  == 0)
			<h4>群組#1</h4>
			<p>
	 	    <a class="btn btn-info" href="{{ url('offload/on/1') }}">
			<i class="fa fa-check"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group2  == 0)
			<h4>群組#2</h4>
			<p>
	 	    <a class="btn btn-info" href="{{ url('offload/on/2') }}">
			<i class="fa fa-check"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group3  == 0)
			<h4>群組#3</h4>
			<p>
	 	    <a class="btn btn-info" href="{{ url('offload/on/3') }}">
			<i class="fa fa-check"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group4  == 0)
			<h4>群組#4</h4>
			<p>
	 	    <a class="btn btn-info" href="{{ url('offload/on/4') }}">
			<i class="fa fa-check"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group5  == 0)
			<h4>群組#5</h4>
			<p>
	 	    <a class="btn btn-info" href="{{ url('offload/on/5') }}">
			<i class="fa fa-check"></i></a>
			</p>
			<br>
		@endif
		@if ( $last -> group6  == 0)
			<h4>群組#6</h4>
			<p>
	 	    <a class="btn btn-info" href="{{ url('offload/on/6') }}">
			<i class="fa fa-check"></i></a>
			</p>
			<br>
		@endif
		@endsection
		@include('widgets.panel', array('as'=>'6button', 'header'=>true))
</div>
@stop
