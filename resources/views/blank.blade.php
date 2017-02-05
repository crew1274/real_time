@extends('layouts.dashboard')
@section('title','Blank')
@section('page_heading','Blank')
@section('section')
    <p>
        <label for="amount">Price range:</label>
        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
    </p>

    <div id="slider-range"></div>
@stop
