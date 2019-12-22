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
			<form class="form" action="{{ route('user.test.submission', [$token]) }}">
				@if ($question->question_no === 1)
					<div class="information">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="uname">Symbol No:</label>
								    <input type="text" class="form-control" id="uname" placeholder="Enter symbol no." name="userid" required>
								    <div class="valid-feedback">Valid.</div>
								    <div class="invalid-feedback">Please fill out this field.</div>
								 </div>
							</div>
					</div>
				<hr>
				@endif
				<div class="question form-group">
					<input type="hidden" name="question_no" value="{{ $question->question_no }}">
					<input type="hidden" name="set_id" value="{{ $question->set_id }}">
					 <label for="email">{{ $question->question_no }}. {{ $question->question }}</label>
					 <div class="answers">
					 	<div class="form-check">
					      <label class="form-check-label" for="radio1">
					        <input type="radio" class="form-check-input" id="radio1" name="option" value="1">{{ $question->option_1 }}
					      </label>
					    </div>

					    <div class="form-check">
					      <label class="form-check-label" for="radio2">
					        <input type="radio" class="form-check-input" id="radio2" name="option" value="2">{{ $question->option_2 }}
					      </label>
					    </div>

					    <div class="form-check">
					      <label class="form-check-label" for="radio3">
					        <input type="radio" class="form-check-input" id="radio3" name="option" value="3">{{ $question->option_3 }}
					      </label>
					    </div>

					    <div class="form-check">
					      <label class="form-check-label" for="radio4">
					        <input type="radio" class="form-check-input" id="radio4" name="option" value="4">{{ $question->option_4 }}
					      </label>
					    </div>
					 </div>
				</div>
				<hr>
				<div class="next-pagination">
					<button type="submit" class="btn btn-primary">Next</button>
				</div>
			</form>
		</div>
	</div>

</body>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>