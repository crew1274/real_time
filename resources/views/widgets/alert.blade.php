<div class="alert alert-{{$class}} @if (isset($dismissable)) alert-dismissable @endif" role="alert">
@if (isset($dismissable))
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
@endif
<i class="fa fa-{{ (isset($icon)) ? $icon : $class }}"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
@if (isset($link))  <a href="#" class="alert-link">{{ $link }} </a>
@endif {{ $message }}.
</div>
