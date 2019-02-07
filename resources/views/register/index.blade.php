@extends('main')
@section('title','Registered Students')
@section('card_header','Registered Students')

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
@endsection

@section('pagination')
{{ $registers->links() }}
@endsection

