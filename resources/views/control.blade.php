@extends('layouts.dashboard')
@section('title','Control')
@section('page_heading','卸載群組')
@section('section')
<div class="col-sm-6">
		@section ('5button_panel_title','簡易控制')
		@section ('5button_panel_body')

		@foreach($json['control'] as $json)
		@if ($json['available'] == 1)
		@if ($json['boolean'] == 1)
		<div class="checkbox">
  			<label >
    			<input  id= {{ 'switch'.$json['group'] }} type="checkbox" checked data-toggle="toggle" data-width="100" >
    				Group {{$json['group']}}
  			</label>
		</div>
		<label id={{ 'success'.$json['group'] }}  class="text-info" ></label>
		@else
    	<div class="checkbox">
  			<label>
    			<input type="checkbox" data-toggle="toggle" data-width="100">
    				Group {{$json['group']}}
  			</label>
		</div>
		<label id={{ 'success'.$json['group'] }}  class="text-info" ></label>
		@endif
		@else
		<div class="checkbox disabled">
  			<label>
    			<input type="checkbox" disabled data-toggle="toggle" data-width="100">
    				Group {{$json['group']}}
  			</label>
		</div>
		<label id={{ 'success'.$json['group'] }}  class="text-info" ></label>
		@endif
		@endforeach
		@endsection
		@include('widgets.panel', array('as'=>'5button', 'header'=>true))
</div>



<script>
        $(function() {
        $('#switch1').change(function() 
        {
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
                        });

              $.ajax({
                    type :"POST",
                    url: "control/switch",
                    data: { id:1},
        success: function() {
            $('#success1').html('POST成功!');
        }
                    });

                $('#console1').html('切換成功!');
                    })
                    })
</script>
@stop