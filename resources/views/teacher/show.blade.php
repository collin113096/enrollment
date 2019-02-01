@extends('template')
@section('title','Show Teacher')
@section('content')
<style>

input.form-control, select.custom-select {
    border: none;
    border-bottom: 1px solid gainsboro;
    border-radius: 0;
}

</style>
<!-- FORM -->
<form class="col-md-8" method="post" action="/teachers/{{ $teacher->id }}">
@csrf
@method('PATCH')
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Show Teacher
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">

		<!-- LAST NAME -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Teacher Name</strong></label>
			<div class="col-md-6">
				<input class="bg-white form-control" type="text" name="last_name" value="{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}" disabled="">
			</div>
		</div>

		<!-- CLASSIFICATION -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Classification</strong></label>
			<div class="col-md-6">
				<input class="bg-white form-control" type="text" name="classification" value="{{ $teacher->classification }}" disabled="">
			</div>
		</div>
		
		<!-- BIRTH DATE -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Birth Date</strong></label>
			<div class="col-md-6">
				<input class="bg-white form-control" type="date" name="birth_date" value="{{ $teacher->birth_date }}" disabled="">
			</div>
		</div>

		
		<hr>
		
		<!-- HOME ADDRESS -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Home Address</strong></label>
			<div class="col-md-6">
				<input class="bg-white form-control" type="text" name="home_address" value="{{ $teacher->home_address }}" disabled="">
			</div>
		</div>

		<!-- EMAIL -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Email</strong></label>
			<div class="col-md-6">
				<input class="bg-white form-control" type="email" name="email" value="{{ $teacher->email }}" disabled="">
			</div>
		</div>
		
		<!-- CONTACT -->
		<div class="form-row form-group">
			<label class="col-md-4 text-md-right col-form-label"><strong>Contact</strong></label>
			<div class="col-md-6">
				<input class="bg-white form-control" type="number" name="contact" value="{{ $teacher->contact }}" disabled="">
			</div>
		</div>

	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-between">
			<a class="btn btn-light mr-1" href="/teachers"><i class="fas fa-arrow-left"></i> Back</a>
			<a 
				class="btn btn-primary" 
				href="/teachers/{{ $teacher->id }}/edit">
			<i class="fas fa-pen"></i> Edit
			</a>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection