<!DOCTYPE html>
<html>
<head>
	<title>Forms</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/frontend-style.css') }}">
</head>
<body class="bg-secondary">
	<div class="container">
		<div class="mainbox bg-light border border-dark shadow">
			<h3 style="padding:1rem;"> Total correct answer you have made is: {{ $total_correct_answer }} </h3>
		</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>