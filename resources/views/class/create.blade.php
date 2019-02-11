@extends('registrar.template')
@section('title','Create Class')
@section('body')
@component('component.create.form')

@slot('url')
/classes
@endslot

@slot('title')
Create Class
@endslot

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

@select
	@slot('label')
	Time
	@endslot

	@slot('name')
	time_id
	@endslot

	@foreach($times as $time)
		<option value="{{ $time->id }}">{{ date('h:i A', strtotime($time->in)) }} - {{ date('h:i A', strtotime($time->out)) }}</option>
	@endforeach
@endselect

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

@select
	@slot('label')
	Grade
	@endslot

	@slot('name')
	grade_id
	@endslot

	@foreach($grades as $grade)
		<option value="{{ $grade->id }}">{{ $grade->name }}</option>
	@endforeach
@endselect

@action
/classes
@endaction

@endcomponent
@endsection


		