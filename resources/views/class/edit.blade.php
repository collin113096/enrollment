@extends('edit_form')
@section('title','Edit Class')
@section('card_header', 'Edit Class')

@section('card_body')
	
	<!-- SUBJECT -->
	@select
		@slot('label')
			Subject
		@endslot
		@slot('name')
			subject_id
		@endslot
		@foreach($subjects as $subject)
			<option value="{{ $subject->id }}" {{ $subject->id == $class->subject->id ? 'selected':'' }}>{{ $subject->name }}</option>
		@endforeach	
	@endselect

	<!--TIME -->
	@select
		@slot('label')
			Time
		@endslot
		@slot('name')
			time_id
		@endslot
		@foreach($times as $time)
			<option value="{{ $time->id }}" {{ $time->id == $class->time->id ? 'selected':'' }}>{{ date('h:i A', strtotime($class->time->in)) }} - {{ date('h:i A', strtotime($class->time->out)) }}</option>
		@endforeach
	@endselect


	<!--ROOM -->
	@select
		@slot('label')
			Room
		@endslot
		@slot('name')
			room_id
		@endslot
		@foreach($rooms as $room)
			<option value="{{ $room->id }}" {{ $room->id == $class->room->id ? 'selected':'' }}>{{ $room->name }}</option>
		@endforeach
	@endselect

	<!--TEACHER -->
	@select
		@slot('label')
			Teacher
		@endslot
		@slot('name')
			teacher_id
		@endslot
		@foreach($teachers as $teacher)
			<option value="{{ $teacher->id }}" {{ $teacher->id == $class->teacher->id ? 'selected':'' }}>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</option>
		@endforeach
	@endselect

	<!--SECTION -->
	@select
		@slot('label')
			Section
		@endslot
		@slot('name')
			section_id
		@endslot
		@foreach($sections as $section)
			<option value="{{ $section->id }}" {{ $section->id == $class->section->id ? 'selected':'' }}>{{ $section->name }}</option>
		@endforeach
	@endselect

	@action
		/classes
	@endaction
@endsection

@section('form')
	/classes/{{ $class->id }}
@endsection
