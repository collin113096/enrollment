@extends('create_form')
@section('title','Create Class')

@section('card_header')
Create Class
@endsection

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
			<option value="{{ $subject->id }}">{{ $subject->name }}</option>
		@endforeach
	@endselect
	
	<!-- TIME -->
	@select
		@slot('label')
			Time
		@endslot
		@slot('name')
			time_id
		@endslot
		@foreach($times as $time)
			<option value="{{ $time->id }}">{{ $time->in }} - {{ $time->out }}</option>
		@endforeach
	@endselect
	
	<!-- ROOM -->
	@select
		@slot('label')
			Room
		@endslot
		@slot('name')
			room_id
		@endslot
		@foreach($rooms as $room)
			<option value="{{ $room->id }}">{{ $room->name }}</option>
		@endforeach	
	@endselect

	<!-- TEACHER -->
	@select
		@slot('label')
			Teacher
		@endslot
		@slot('name')
			teacher_id
		@endslot
		@foreach($teachers as $teacher)
			<option value="{{ $teacher->id }}">{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</option>
		@endforeach
	@endselect

	<!-- SECTION -->
	@select
		@slot('label')
			Section
		@endslot
		@slot('name')
			section_id
		@endslot
		@foreach($sections as $section)
			<option value="{{ $section->id }}">{{ $section->name }}</option>
		@endforeach
	@endselect

	<!-- ACTION -->
	@action
	/classes
	@endaction

@endsection

@section('form')
/classes
@endsection
	
		