@extends('template')
@section('title','Application Form for Enrollment')
@section('content')
<form class="col-md-8" method="post" action="{{ route('application.store') }}">@csrf
@include('errors')
<div class="card">
	<div class="card-header py-4 text-center">
		<span class="h5 font-weight-bold">Pagsanjan Academy Application Form for Enrollment</span>
	</div>
	<div class="card-body">	
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Student Information</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Last Name</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.last_name') ? 'is-invalid' : '' }}" type="text" name="student[last_name]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">First Name</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.first_name') ? 'is-invalid' : '' }}" type="text" name="student[first_name]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Middle Name</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.middle_name') ? 'is-invalid' : '' }}" type="text" name="student[middle_name]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Home Address</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.home_address') ? 'is-invalid' : '' }}" type="text" name="student[home_address]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Birth Date</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.birth_date') ? 'is-invalid' : '' }}" type="date" name="student[birth_date]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Birth Place</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.birth_place') ? 'is-invalid' : '' }}" type="text" name="student[birth_place]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Religion</label>			
			<div class="col-md-6">
				<input class="form-control {{ $errors->has('student.religion') ? 'is-invalid' : '' }}" type="text" name="student[religion]">
			</div>
		</div>
		<div class="form-group form-row">			
			<label class="col-md-4 text-md-right col-form-label">Gender</label>			
			<div class="col-md-6">
				<select class="custom-select {{ $errors->has('student.gender') ? 'is-invalid' : '' }}" name="student[gender]">
					<option value="" hidden>Choose</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
			</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label ">Grade</label>			
				<div class="col-md-6">
					<select class="custom-select {{ $errors->has('student.grade') ? 'is-invalid' : '' }}" name="student[grade]" id="">
						<option value="" hidden>Choose</option>
						@foreach($grades as $grade)
						<option value="{{ $grade->name }}">{{ $grade->name }}</option>
						@endforeach
					</select>
				</div>
		</div>
		<hr>
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Father Information</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Father Name</label>			
				<div class="col-md-6">
					<input class="form-control {{ $errors->has('father.name') ? 'is-invalid' : '' }}" type="text" name="father[name]">
				</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Contact</label>			
				<div class="col-md-6">
					<input class="form-control {{ $errors->has('father.contact') ? 'is-invalid' : '' }}" type="number" name="father[contact]">
				</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6">
					<input class="form-control {{ $errors->has('father.occupation') ? 'is-invalid' : '' }}" type="text" name="father[occupation]">
				</div>
		</div>
		<hr>
		<div class="form-group">			
			<div class="col-md-6 offset-md-4 text-center font-weight-bold">Mother Information</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Mother Name</label>			
				<div class="col-md-6">
					<input class="form-control {{ $errors->has('mother.name') ? 'is-invalid' : '' }}" type="text" name="mother[name]">
				</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Contact</label>			
				<div class="col-md-6">
					<input class="form-control {{ $errors->has('mother.contact') ? 'is-invalid' : '' }}" type="number" name="mother[contact]">
				</div>
		</div>
		<div class="form-group form-row">			
				<label class="col-md-4 text-md-right col-form-label">Occupation</label>			
				<div class="col-md-6">
					<input class="form-control {{ $errors->has('mother.occupation') ? 'is-invalid' : '' }}" type="text" name="mother[occupation]">
				</div>
		</div>
	</div>
	<div class="card-footer d-flex justify-content-end">				
		<button class="btn btn-primary">Send Application Form</button>
	</div>
</div>
</form>
<script>
	$(document).ready(function(){

		//if the user type
		$('input').keyup(function(){
			
			if($(this).val() == ''){
				turnToGray($(this));
			}else{
				turnToGreen($(this));
			}
		});
		
	});

	function turnToGray(element){
		$(element).removeClass('is-invalid');
		$(element).removeClass('is-valid');
	}

	function turnToGreen(element){
		$(element).removeClass('is-invalid');
		$(element).addClass('is-valid');
	}
</script>
@endsection