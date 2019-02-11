@extends('registrar.template')
@section('title','Edit Class')
@section('body')
@component('component.edit.form')

@slot('url')
/classes/{{ $class->id }}
@endslot

@slot('title')
Edit Class
@endslot

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

@select
	@slot('label')
	Grade
	@endslot

	@slot('name')
	grade_id
	@endslot

	@foreach($grades as $grade)
		<option value="{{ $grade->id }}" {{ $grade->id == $class->grade->id ? 'selected':'' }}>{{ $grade->name }}</option>
	@endforeach
@endselect

@action
	/classes
@endaction

@endcomponent
@endsection


