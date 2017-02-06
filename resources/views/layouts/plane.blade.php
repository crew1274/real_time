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
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<link rel="icon" href="{{ asset("favicon.ico") }}" type="image/x-icon" />
	<link rel="stylesheet" href="{{ asset("assets/ui/jquery-ui.css") }}"/>
	<link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
</head>
<body>
	@yield('body')
	<script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
	<script src="{{ asset("assets/ui/jquery-ui.js") }}" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js" type="text/javascript" ></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" type="text/javascript" ></script>
		<script type="text/javascript">
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
                max: 1000,
                values: [ 0, 0 ],
                slide: function( event, ui )
				{
			 	$( "#demand_bottom" ).val( ui.values[ 0 ]);
			 	$( "#demand_top" ).val( ui.values[ 1 ]);
                }
            });
            $( "#demand_bottom" ).val( $( "#demand-range" ).slider( "value" ) );
            $( "#demand_top" ).val( $( "#demand-range" ).slider( "value" ) );
        } );
	</script>

	<script>
        $( function() {
            $( "#demand-max" ).slider({
                range: "min",
                min: 0,
                max: 1000,
                value: 1000,
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

</body>
</html>
