@extends('template')
@section('title','Create Section')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/sections">
@csrf
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Create Section
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">

		<!-- SECTION NAME -->
		<div class="form-group">
			<label><strong>Section Name</strong></label>
			<input class="form-control" type="text" name="name">
		</div>
		
		<!-- GRADE -->
		<div class="form-group">
			<label><strong>Grade</strong></label>
			<select class="custom-select" name="grade_id">
				<option value="" hidden>Choose</option>
				@foreach($grades as $grade)
					<option value="{{ $grade->id }}">{{ $grade->name }}</option>
				@endforeach
			</select>
		</div>

		<!-- ACTION -->
		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/sections">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection