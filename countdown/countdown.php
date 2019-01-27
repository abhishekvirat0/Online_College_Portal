<html>
	<head>
		<link rel="stylesheet" href="compiled/flipclock.css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script src="compiled/flipclock.js"></script>		
	</head>
	<body>
			<div class="clock" style="margin-left:35em;"></div>
			<div class="message"></div>
		

	<script type="text/javascript">
		var clock;
		
		$(document).ready(function() {

			clock = $('.clock').FlipClock(120, {
		        clockFace: 'MinuteCounter',
		        countdown: true,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('');
		        	}
		        }
		    });

		});
		
	</script>
	
	</body>
</html>