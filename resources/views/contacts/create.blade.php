@extends('layouts.default', ['title' => 'Contact'])

@section('container')
	<div class="container container col-md-6 col-md-offset-2 col-sm-10 col-sm-offset-1" style="margin-top: 4em; margin-bottom: 4em;">
			
				<h2>Get In Touch</h2>

				<p class="text-muted">If you having trouble with this service, please <a href="mailto:moudmagongore@gmail.com">ask for help.</a></p>


				<form action="#" methode="POST">
					<div class="form-group">
						<label for="name" class="control-label">Name</label>
						<input type="text" name="name" id="name" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="email" class="control-label">Email</label>
						<input type="email" name="email" id="email" class="form-control" required="required">
					</div>

					<div class="form-group">
						<label for="message" class="control-label sr-only">
							Message
						</label>
						<textarea class="form-control" rows="10" cols="10" required="required" name="message" id="message"></textarea>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
					</div>
				</form>
	</div>
@stop