@extends('template')
@section('title','Create Room')
@section('content')
<!-- FORM -->
<form class="col-md-8" method="post" action="/classes">
@csrf
<!-- CARD -->
<div class="card">
	
	<!-- CARD HEADER -->
	<div class="card-header">
		Create Class
	</div>
	
	<!-- CARD BODY -->
	<div class="card-body">

		<!-- SUBJECT -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Subject</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="subject_id" >
					<option value="" hidden>Choose Subject</option>
					@foreach($subjects as $subject)
					<option value="{{ $subject->id }}">{{ $subject->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		
		<!-- TIME -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Time</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="time_id" >
					<option value="" hidden>Choose Time</option>
					@foreach($times as $time)
					<option value="{{ $time->id }}">{{ $time->in }} - {{ $time->out }}</option>
					@endforeach
				</select>
			</div>
		</div>
		
		<!-- ROOM -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Room</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="room_id" >
					<option value="" hidden>Choose Room</option>
					@foreach($rooms as $room)
					<option value="{{ $room->id }}">{{ $room->name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		
		<!-- TEACHER -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Teacher</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="teacher_id" >
					<option value="" hidden>Choose Teacher</option>
					@foreach($teachers as $teacher)
					<option value="{{ $teacher->id }}">{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</option>
					@endforeach
				</select>
			</div>
		</div>
		
		<!-- SECTION -->
		<div class="form-row form-group">
			<label class="col-md-4 col-form-label text-md-right"><strong>Section</strong></label>
			<div class="col-md-6">
				<select class="custom-select" name="section_id" >
					<option value="" hidden>Choose Section</option>
					@foreach($sections as $section)
					<option value="{{ $section->id }}">{{ $section->name }}</option>
					@endforeach
				</select>
			</div>
		</div>




		<div class="form-row justify-content-end">
			<a class="btn btn-light mr-1" href="/classes">Cancel</a>
			<button class="btn btn-success" type="submit"><i class="fas fa-save"></i> Save</button>
		</div>
	</div>

<!-- END OF CARD -->
</div>

<!-- END OF FORM -->
</form>
@endsection