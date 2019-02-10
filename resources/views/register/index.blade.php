@extends('registrar.template')
@section('title','Registered Students')
@section('body')
@component('component.card')

@slot('title')
Registered Students
@endslot

@slot('add_button')
@endslot

@section('column_width')
<div class="col-md-10">
@endsection

@slot('head')
	<th>Student Name</th>
	<th>Student LRN</th>
	<th>School Year Enrolled</th>
	<th>Section</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($registers as $register)
	<tr>
		<td>{{ $register->student->last_name }}, {{ $register->student->first_name }} {{ $register->student->middle_name }}</td>
		<td>{{ $register->student_lrn }}</td>
		<td>{{ $register->school_year }}</td>
		<td>{{ $register->section->name }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/registers/{{ $register->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/registers/{{ $register->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $registers->links() }}
@endslot

@endcomponent
@endsection
