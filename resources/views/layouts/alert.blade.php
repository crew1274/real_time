@if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
@elseif ($message = Session::get('dangerous'))
<div class="alert alert-dangerous">
                    <p>{{ $message }}</p>
                </div>
@endif