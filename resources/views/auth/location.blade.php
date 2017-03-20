@extends ('layouts.plane')
@section('title',trans('lcoation.location'))
@section ('body')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
            <br /><br /><br />
               @section ('location_panel_title',trans('lcoation.please'))
               @section ('location_panel_body')
                    <form role="form" method="POST" action="{{ url('/location') }}">
                          {{ csrf_field() }}
                            <fieldset>
                                <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <input class="form-control" placeholder="{{ trans('location.address') }}" name="address" type="text" value="{{ old('address') }}" autofocus>
                                </div>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                                
                                <div class="form-group">
                                  <button type="submit" class="btn btn-primary"> {{trans('location.update')}}
                                  </button>
                            </fieldset>
                        </form>

                @endsection
              @include('widgets.panel', array('as'=>'location', 'header'=>true,'controls'=>true))
            </div>
        </div>
    </div>
@stop
