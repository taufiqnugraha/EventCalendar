<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link href="{{asset('vendor/fullcalendar/fullcalendar.min.css')}}" /> -->
        {!! Html::style('vendor/fullcalendar/fullcalendar.min.css')!!}


        <title>Laravel</title>

        <!-- Fonts -->
        
        {!! Html::style('css/app.css')!!}
    </head>

    <body>
        <div class='container'>
           <div id='calendar'></div>
        </div>
    </body>
    
    {!! Html::script('js/app.js')!!}
    {!! Html::script('vendor/fullcalendar/lib/moment.min.js')!!}
    {!! Html::script('vendor/fullcalendar/lib/jquery.min.js')!!}
    {!! Html::script('vendor/fullcalendar/fullcalendar.min.js')!!}
    <!--
     <script src="{{asset('vendor/fullcalendar/lib/moment.min.js')}}"></script>
     <script src="{{asset('vendor/fullcalendar/lib/jquery.min.js')}}"></script>
     <script src="{{asset('vendor/fullcalendar/fullcalendar.min.js')}}"></script>

     -->
<script>
    var BASEURL ="{{ url('/') }}";
	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,basicWeek,basicDay'
			},
			defaultDate: '2017-07-07',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: BASEURL + '/events'
		});
		
	});

</script>

</html>
