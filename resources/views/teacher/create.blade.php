@extends('template')
@section('title','Create Teacher')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/teachers">
@csrf
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Create Teacher
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">

		<!-- LAST NAME -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Last Name</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="last_name">
			</div>
		</div>

		<!-- FIRST NAME -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>First Name</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="first_name">
			</div>
		</div>

		<!-- MIDDLE NAME -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Middle Name</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="middle_name">
			</div>
		</div>
		
		<!-- CLASSIFICATION -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Classification</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="classification">
			</div>
		</div>
		
		<!-- BIRTH DATE -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Birth Date</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="date" name="birth_date">
			</div>
		</div>

		
		<hr>
		
		<!-- HOME ADDRESS -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Home Address</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="home_address">
			</div>
		</div>

		<!-- EMAIL -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Email</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="email" name="email">
			</div>
		</div>
		
		<!-- CONTACT -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Contact</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="number" name="contact">
			</div>
		</div>

	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-end">
			<a class="btn btn-light mr-1" href="/teachers">Cancel</a>
			<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection