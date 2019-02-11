@extends('registrar.template')
@section('title','All Classes')
@section('body')
@component('component.card')

@slot('title')
All Classes
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/classes/create"
	@endslot
@endadd
@endslot

@section('column_width')
<div class="col-md-12">
@endsection

@slot('head')
	<th>Subject</th>
	<th>Time</th>
	<th>Room</th>
	<th>Teacher</th>
	<th>Grade</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($classes as $class)
	<tr>
		<td>{{ $class->subject->name }}</td>
		<td>{{ date('h:i A', strtotime($class->time->in)) }} - {{ date('h:i A', strtotime($class->time->out)) }}</td>
		<td>{{ $class->room->name }}</td>
		<td>{{ $class->teacher->last_name }}, {{ $class->teacher->first_name }} {{ $class->teacher->middle_name }}</td>
		<td>{{ $class->grade->name }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/classes/{{ $class->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/classes/{{ $class->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $classes->links() }}
@endslot

@endcomponent
@endsection