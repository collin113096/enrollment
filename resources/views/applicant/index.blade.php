@extends('main')
@section('title','All Applicants')
@section('card_header','All Applicants')

@section('table_head')
	<th>Applicant Name</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($students as $student)
	<tr>
		<td>
			{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
		</td>
		<td class="text-center">
		@component('view_button')
			@slot('href')
				href="/applicant/{{ $student->id }}/information"
			@endslot
			Information
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $students->links() }}
@endsection

