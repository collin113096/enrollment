@extends('template')
@section('title','Application Form for Enrollment')
@section('content')
<form action="">
<div class="card">
	<div class="card-header py-4 text-center">
		<span class="h5 font-weight-bold">Application Form for Enrollment</span>
	</div>
	<div class="card-body">
		
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Last Name</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="last_name"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">First Name</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="first_name"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Middle Name</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="middle_name"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Home Address</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="address"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Birth Date</label>			
				<div class="col-md-6"><input class="form-control" type="date" name="birth_date"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Birth Place</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="birth_place"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Religion</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="religion"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Gender</label>			
				<div class="col-md-6">
					<select class="custom-select" name="gender">
						<option value="" hidden>Choose</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
				</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Grade</label>			
				<div class="col-md-6">
					<select class="custom-select" name="grade" id="">
						<option value="" hidden>Choose</option>
						@foreach($grades as $grade)
						<option value="{{ $grade->name }}">{{ $grade->name }}</option>
						@endforeach
					</select>
				</div>
		</div>
		<hr>
	
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Father Name</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="father_name"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Contact</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="father_contact"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="father_occupation"></div>
		</div>
		<hr>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Mother Name</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="mother_name"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Contact</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="mother_contact"></div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6"><input class="form-control" type="text" name="mother_occupation"></div>
		</div>
	</div>
	<div class="card-footer d-flex justify-content-end">				
		<button class="btn btn-primary">Send Application Form</button>
	</div>
</div>
</form>
@endsection