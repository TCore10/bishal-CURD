<!DOCTYPE html>
<html>
<head>
	<title>Generate JS</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		    $("#generate").click(function(){
		        $("#form").append("JS working fine");
		    });
		});
	</script>
</head>
<body style="background-color: lightblue">
	<div style="align-content: center;">
		<form id="form" action="{{ route('save') }}" method="post">
			@csrf
			<input type="text" name="domain" placeholder="Enter your Domain">
			<button type="submit" id="generate">Save Data</button>
		</form>
	</div>
</body>
</html>