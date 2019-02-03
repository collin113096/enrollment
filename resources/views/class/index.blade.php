@extends('main')
@section('title','All Classes')
@section('card_header','All Classes')

@section('column_width')
<div class="col-md-12">
@endsection

@section('add_button')
@component('add_button')
	@slot('href')
		href="/classes/create"
	@endslot
@endcomponent
@endsection

@section('table_head')
	<th>Subject</th>
	<th>Time</th>
	<th>Room</th>
	<th>Teacher</th>
	<th>Section</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($classes as $class)
	<tr>
		<td>{{ $class->subject->name }}</td>
		<td>{{ date('h:i A', strtotime($class->time->in)) }} - {{ date('h:i A', strtotime($class->time->out)) }}</td>
		<td>{{ $class->room->name }}</td>
		<td>{{ $class->teacher->last_name }}, {{ $class->teacher->first_name }} {{ $class->teacher->middle_name }}</td>
		<td>{{ $class->section->name }}</td>
		<td class="text-center">
		@component('edit_button')
			@slot('href')
				href="/classes/{{ $class->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/classes/{{ $class->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $classes->links() }}
@endsection
