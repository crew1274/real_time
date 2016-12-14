@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/home') }}">DAE Admin</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                          <div class="container">
          @if (Session::has('message'))
              <div class="flash alert">
                  <p>{{ Session::get('message') }}</p>
              </div>
          @endif
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>{{trans('messages.email')}}</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>

                                        <div>
                                        @include('widgets.progress', array('animated'=> true, 'class'=>'success', 'value'=>'40'))
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>

                                        <div>
                                        @include('widgets.progress', array('animated'=> true, 'class'=>'info', 'value'=>'20'))
                                            <span class="sr-only">20% Complete</span>
                                        </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>

                                        <div>
                                        @include('widgets.progress', array('animated'=> true, 'class'=>'warning', 'value'=>'60'))
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>

                                        <div>
                                        @include('widgets.progress', array('animated'=> true,'class'=>'danger', 'value'=>'80'))
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-language"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu ">
                        <li>
                            <a href="{{ url('/lang/zh') }}">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> 中文

                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ url('/lang/en') }}">
                                <div>
                                    <i class="fa fa-globe fa-fw"></i> English

                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{ url('profile') }}"><i class="fa fa-user fa-fw"></i>
                            {{ Auth::user()->name }}{{ trans('dashboard.profile') }}</a>
                        </li>
                    </li>
                        <li class="divider"></li>
                        <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                       <i class="fa fa-sign-out fa-fw"></i>
                                       {{ trans('dashboard.logout') }}</a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">  {{ csrf_field() }}  </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li class="{{ Request::is('home') ? 'active' : '' }}">
                            <a href="{{ url ('home') }}"><i class="fa fa-home fa-fw"></i> {{ trans('dashboard.home') }}</a>
                        </li>
                        <li class="{{ Request::is('record') ? 'active' : '' }}">
                            <a href="{{ url ('record') }}"><i class="fa fa-bar-chart-o fa-fw"></i> {{ trans('dashboard.record') }}</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li class="{{ Request::is('setting') ? 'active' : '' }}">
                            <a href="{{ url ('setting') }}"><i class="fa fa-cogs fa-fw"></i> {{ trans('dashboard.initial_setting') }}</a>
                        </li>

                        <li class="{{ Request::is('config') ? 'active' : '' }}">
                            <a href="{{ url ('config') }}"><i class="fa fa-edit fa-fw">
                            </i> {{ trans('dashboard.peak_time_config') }}</a>
                        </li>


                        <li >
                            <a href="#"><i class="fa fa-wifi"></i>{{ trans('dashboard.network') }}<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="{{ Request::is('network/dhcp') ? 'active' : '' }}">
                                    <a href="{{ url ('network/dhcp') }}"> {{ trans('network.dhcp') }}</a>
                                </li>
                                <li class="{{ Request::is('network/static') ? 'active' : '' }}">
                                    <a href="{{ url ('network/static') }}"> {{ trans('network.static_ip') }}</a>
                                </li>
                                <li class="{{ Request::is('network/wifi') ? 'active' : '' }}">
                                    <a href="{{ url ('network/wifi') }}"> {{ trans('network.wifi') }}</a>
                                </li>

                            </ul>
                            <li >
                                <a href="#"><i class="fa fa-wrench fa-fw"></i>
                                {{ trans('demand_respond') }}<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li class="{{ Request::is('config') ? 'active' : '' }}">
                                        <a href="{{ url ('config') }}"><i class="fa fa-edit fa-fw">
                                        </i> {{ trans('dashboard.peak_time_config') }}</a>
                                    </li>
                                    <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('buttons' ) }}">Buttons</a>
                                    </li>
                                    <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                                        <a href="{{ url('notifications') }}">Alerts</a>
                                    </li>
                                    <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('typography') }}">Typography</a>
                                    </li>
                                    <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('icons') }}"> Icons</a>
                                    </li>
                                    <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                                        <a href="{{ url ('grid') }}">Grid</a>
                                    </li>
                                </ul>

                        <li >
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Panels and Collapsibles</a>
                                </li>
                                <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('buttons' ) }}">Buttons</a>
                                </li>
                                <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                                    <a href="{{ url('notifications') }}">Alerts</a>
                                </li>
                                <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('typography') }}">Typography</a>
                                </li>
                                <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('icons') }}"> Icons</a>
                                </li>
                                <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('grid') }}">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('blank') }}">Blank Page</a>
                                </li>
                                <li>
                                    <a href="{{ url ('login') }}">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                            <a href="{{ url ('documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop