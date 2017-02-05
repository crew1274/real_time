@extends ('layouts.dashboard')
@section('title',trans('demnad.demand'))
@section('page_heading',trans('demnad.demand'))
@section('section')
    <div class="col-sm-12">
        @include('layouts.alert')
        <div class="row">
                <div class="col-sm-8">
                    @section ('typo1_panel_title','需量值設定:')
                    @section ('typo1_panel_body')
                        <label class="text-muted">需量低限:</label>
                        <input id="demand_bottom" readonly class="text-info" style="border:0;  font-weight:bold;">
                     <br><label class="text-muted">需量高限:</label>
                        <input id="demand_top" readonly class="text-info" style="border:0;  font-weight:bold;">
                <div id="demand-range"></div>
            <label class="text-muted">最大需量:</label>
            <input type="text" id="max" readonly style="border:0;  font-weight:bold;" class="text-danger">
        <div id="demand-max" ></div>
                </div>
        </div>
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'typo1'))
        <div class="row">
            <div class="col-sm-8">
                @section ('typo2_panel_title','卸載模式設定:')
                @section ('typo2_panel_body')
                    <div class="form-group">
                        <label class="text-muted">{{trans('setting.baud_rate')}}:</label>
                        {!!
                        Form::select('speed', array('1200' => '1200'
                        , '2400' => '2400'
                        , '4800' => '4800'
                        , '9600' => '9600'),null,['class'=>'form-control'])!!}
                    </div>
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'typo2'))
            </div>
        </div>



    </div>

@stop
