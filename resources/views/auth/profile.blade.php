@extends ('layouts.plane')
@section('title',trans('auth.profile'))
@section('body')
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
            <br /><br /><br />
               @section ('login_panel_title',trans('auth.please_update_info'))
               @section ('login_panel_body')
					{!! Form::open(['url' => 'profile/update']) !!}
					{{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{trans('auth.name')}}:</label>

                            <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name"
                        placeholder={{$user-> name }} disabled>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">{{trans('auth.email')}}:</label>

                            <div class="col-md-6">
                    <input id="email" type="email" class="form-control"
                    placeholder={{$user-> email }} name="email"disabled>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('utc') ? ' has-error' : '' }}">
                            <label for="utc" class="col-md-4 control-label">{{trans('auth.time_zone')}}:</label>

                            <div class="col-md-6">
							{!!  	Form::select('utc', [8 => '8', 7 => '7'], null, ['class'=>'form-control','placeholder' => 'Pick a size...']) !!}


                                @if ($errors->has('utc'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('utc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<br>
                        <div class="form-group">
                            <div class="col-md-2 control-label">
									{!! Form::submit('更新',['class'=>'btn btn-primary form-control']) !!}

                                </button>
                            </div>
                        </div>
					{!! Form::close() !!}

                                    @endsection
                                    @include('widgets.panel', array('as'=>'login', 'header'=>true))
                                </div>
                            </div>
                        </div>
                    @stop
