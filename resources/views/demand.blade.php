@extends ('layouts.dashboard')
@section('title',trans('demnad.demand'))
@section('page_heading',trans('demnad.demand'))
@section('section')

    <div class="row">
        <div class="col-sm-12">
            @include('layouts.alert')
            @section ('cotable_panel_title',trans('demnad.range'))
            @section ('cotable_panel_body')
                <p class="pull-left">
                    <a class="btn btn-success" href="{{ route('peaktime.create') }}">{{trans('demand.range_create')}}</a>
                </p>

            @endsection
            @include('widgets.panel', array('header'=>true, 'as'=>'cotable'))
        </div>
    </div>
    </div>

@stop
