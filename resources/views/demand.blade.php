@extends ('layouts.dashboard')
@section('title','需量反應設定')
@section('page_heading','需量反應設定')
@section('section')
    <div class="col-sm-12">
        @include('layouts.alert')
        {!! Form::open(['url' => 'demand']) !!}
        {{ csrf_field() }}
        <div class="row">
                <div class="col-sm-8">
                    @section ('typo1_panel_title','需量值設定:')
                    @section ('typo1_panel_body')

                        <label class="text-muted">需量低限:</label>
                        {!! Form::number('demand_bottom', 'demand_bottom', array('id' => 'demand_bottom','readonly' => 'true','class' => 'form-control','style'=>'border:0;  font-weight:bold;')) !!}
                     <br><label class="text-muted">需量高限:</label>
                        {!! Form::number('demand_top', 'demand_top', array('id' => 'demand_top','readonly' => 'true','class' => 'form-control','style'=>'border:0;  font-weight:bold;')) !!}

                        <br>
                <div id="demand-range"></div>
<br>
            <label class="text-muted">最大需量:</label>
     {!! Form::number('max', 'max', array('id' => 'max','readonly' => 'true','class' => 'form-control','style'=>'border:0;  font-weight:bold;')) !!}
                        <br>
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
                        <label class="text-muted">卸載模式:</label>
                        {!! Form::select('mode', [ 'a' => '先卸一起復歸',
                                                 'b' => '先卸先復歸',
                                                 'c' => '先卸後復歸',
                                                 'd' => '循環先卸一起復歸',
                                                 'e' => '循環先卸先復歸',
                                                 'f' => '循環先卸後復歸'], null, array('class' => 'form-control')) !!}

                    </div>
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'typo2'))
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                @section ('typo3_panel_title','需量控制時間設定:')
                @section ('typo3_panel_body')
                    <label class="text-muted">卸載間隔時間:</label>
                    {!! Form::number('load_off_gap', 'load_off_gap', array('id' => 'gap1','class' => 'form-control','style'=>'border:0;  font-weight:bold;')) !!}
                    <label class="text-muted">秒</label>
                    <br><br>
                    <label class="text-muted">復歸延遲時間:</label>
                    {!! Form::number('reload_delay', 'reload_delay', array('id' => 'delay','class' => 'form-control','style'=>'border:0;  font-weight:bold;')) !!}
                    <label class="text-muted">秒</label>
                    <br> <br>
                    <label class="text-muted">復歸間隔時間:</label>
                    {!! Form::number('reload_gap', 'reload_gap', array('id' => 'gap2','class' => 'form-control','style'=>'border:0;  font-weight:bold;')) !!}
                    <label class="text-muted">秒</label>
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'typo3'))
    </div>
    </div>
                <div class="row">
                    <div class="col-sm-8">
                @section ('typo4_panel_title','卸載群種類設定:')
                @section ('typo4_panel_body')
                            <div class="form-group">
                                <label class="text-muted">卸載群種類:</label>
                                {!! Form::select('group', [ 'a' => '模組常開',
                                                 'b' => '模組常開',
                                                 'c' => '先卸後復歸',
                                                 'd' => '不設定',
                                                 'e' => 'DEM電表系列'], null, array('class' => 'form-control')) !!}

                            </div>
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'typo4'))
                        <div class="row">
                            <div class="col-sm-8">
                        <button type="test" class="btn btn-primary">更新</button>
                            </div>
                        </div>
            </fieldset>
        </form>
    </div>
@stop
