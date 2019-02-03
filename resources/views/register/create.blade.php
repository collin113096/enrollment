@extends('template')
@section('title','Register Student')
@section('content')
<form class="col-md-8" method="post" action="/registers/{{ $student->id }}">
@csrf
<div class="card">
	<div class="card-header">
		Register Student
	</div>
	<div class="card-body">

		<!-- STUDENT LRN -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Student LRN</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="student_lrn">
			</div>
		</div>

		<!-- SCHOOL YEAR -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>School Year</strong></label>
			<div class="col-md-6">
				<input class="form-control" type="text" name="school_year">
			</div>
		</div>

		<!-- SECTION -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Section</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="section_id">
					<option value="" hidden>Choose</option>
					@foreach($sections as $section)
					<option value="{{ $section->id }}">{{ $section->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
	
	<!-- END OF CARD BODY -->
	</div>

	<!-- CARD FOOTER -->
	<div class="card-footer d-flex justify-content-end">
		<a class="btn btn-light mr-1" href="/sections">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
	</div>
</div>
</form>
@endsection