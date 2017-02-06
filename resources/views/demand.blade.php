@extends ('layouts.dashboard')
@section('title','需量反應設定')
@section('page_heading','需量反應設定')
@section('section')
    <div class="col-sm-12">
        @include('layouts.alert')
        <form class="form-horizontal" role="form" method="POST" action="{{ url('demand') }}">
        {{ csrf_field() }}
        <div class="row">
                <div class="col-sm-8">
                    @section ('typo1_panel_title','需量值設定:')
                    @section ('typo1_panel_body')

                        <label class="text-muted">需量低限:</label>
                        <input id="demand_bottom" readonly class="text-muted" style="border:0;  font-weight:bold;">
                     <br><label class="text-muted">需量高限:</label>
                        <input id="demand_top" readonly class="text-muted" style="border:0;  font-weight:bold;">
                        <br>
                <div id="demand-range"></div>
<br>
            <label class="text-muted">最大需量:</label>

            <input type="text" id="max" readonly style="border:0;  font-weight:bold;" class="text-muted">
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
                        <select class="form-control" id="mode">
                            <option class="text-muted">先卸一起復歸</option>
                            <option class="text-muted">先卸先復歸</option>
                            <option class="text-muted" >先卸後復歸</option>
                            <option class="text-muted">循環先卸一起復歸</option>
                            <option class="text-muted">循環先卸先復歸</option>
                            <option class="text-muted">循環先卸後復歸</option>
                        </select>
                    </div>
                @endsection
                @include('widgets.panel', array('header'=>true, 'as'=>'typo2'))
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8">
                @section ('typo3_panel_title','需量控制時間設定:')
                @section ('typo3_panel_body')
                    <label class="text-muted">卸載間隔時間:</label><input  name="load_off_gap" id="gap1" class="text-muted"><label class="text-muted">秒</label>
                    <br><br>
                    <label class="text-muted">復歸延遲時間:</label><input  name="reload_delay" id="delay" class="text-muted"><label class="text-muted">秒</label>
                    <br> <br>
                    <label class="text-muted">復歸間隔時間:</label><input  name="reload_gap" id="gap2" class="text-muted"><label class="text-muted">秒</label>
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
                                <select class="form-control" name="group">
                                    <option class="text-muted" value="模組常開">模組常開</option>
                                    <option class="text-muted" value="模組常開">模組常開</option>
                                    <option class="text-muted" value="不設定">不設定</option>
                                    <option class="text-muted" value="DEM電表系列">DEM電表系列</option>
                                </select>
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
