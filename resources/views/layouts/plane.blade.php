<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8"/>
	<title>@yield('title')</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon" />
	<link rel="stylesheet" href="{{ asset("assets/ui/jquery-ui.css") }}"/>
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}"/>
	<link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.4.2/sweetalert2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/ui/jquery-ui.js") }}" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js" type="text/javascript" ></script>
 	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/sweetalert2/6.4.2/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" type="text/javascript" ></script>
		
        <script>
            $(function () {
                $('#start').datetimepicker({
                    format: 'HH:mm:ss'
                });
            });
        </script>

		<script >
	            $(function () {
	                $('#end').datetimepicker({
	                    format: 'HH:mm:ss'
	                });
	            });
	    </script>

	<script>
        $( function() {
            $( "#demand-range" ).slider({
                range: true,
                min: 0,
                max: 100,
                step: 5,
                values: [ {!! $last->value_min or 0!!}, {!! $last->value_max or 0 !!} ],
                slide: function( event, ui )
				{
			 	$( "#demand_bottom" ).val( ui.values[ 0 ]);
			 	$( "#demand_top" ).val( ui.values[ 1 ]);
                }
            });
            $( "#demand_bottom" ).val( $( "#demand-range" ).slider( "values",0 ));
            $( "#demand_top" ).val( $( "#demand-range" ).slider( "values",1 ) );
        } );
	</script>

	<script>
        $( function() {
            $( "#demand-max" ).slider({
                range: "min",
                min: 500,
                max: 1500,
                step: 10,
                value: {!! $last->value or 0 !!},

                slide: function( event, ui ) {
                    $( "#max" ).val( ui.value );
                }
            });
            $( "#max" ).val( $( "#demand-max" ).slider( "value" ) );
        } );
	</script>

	<script>
        $( function() {
            var spinner = $( "#gap1" ).spinner();
        } );
	</script>

	<script>
        $( function() {
            var spinner = $( "#delay" ).spinner();
        } );
	</script>

	<script>
        $( function() {
            var spinner = $( "#gap2" ).spinner();
        } );
	</script>


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
        success: function(response) {swal('群組1',response['state'],'success');},
        error: function(response)   {swal('群組1',response['state'],'error');}
                    });
                    })
                    })
</script>

<script>
        $(function() {
        $('#switch2').change(function() 
        {
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
                        });

              $.ajax({
                    type :"POST",
                    url: "control/switch",
                    data: { id:2},
        success: function(response) {swal('群組2',response['state'],'success');},
        error: function(response)   {swal('群組2',response['state'],'error');}
                    });
                    })
                    })
</script>

<script>
        $(function() {
        $('#switch3').change(function() 
        {
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
                        });

              $.ajax({
                    type :"POST",
                    url: "control/switch",
                    data: { id:3},
        success: function(response) {swal('群組3',response['state'],'success');},
        error: function(response)   {swal('群組3',response['state'],'error');}
                    });
                    })
                    })
</script>

<script>
        $(function() {
        $('#switch4').change(function() 
        {
            $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
                        });

              $.ajax({
                    type :"POST",
                    url: "control/switch",
                    data: { id:4},
        success: function(response) {swal('群組4',response['state'],'success');},
        error: function(response)   {swal('群組4',response['state'],'error');}
                    });
                    })
                    })
</script>

</body>
</html>
