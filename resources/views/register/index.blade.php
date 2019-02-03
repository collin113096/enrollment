@extends('main')
@section('title','School Register')
@section('card_header','School Register')

@section('column_width')
<div class="col-md-10">
@endsection

@section('table_head')
	<th>Student Name</th>
	<th>Student LRN</th>
	<th>School Year Enrolled</th>
	<th>Section</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($registers as $register)
	<tr>
		<td>{{ $register->student->last_name }}, {{ $register->student->first_name }} {{ $register->student->first_name }}</td>
		<td>{{ $register->student_lrn }}</td>
		<td>{{ $register->school_year }}</td>
		<td>{{ $register->section->name }}</td>
		<td class="text-center">
		@component('edit_button')
			@slot('href')
				href="/registers/{{ $register->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/registers/{{ $register->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $registers->links() }}
@endsection

