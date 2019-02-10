@extends('registrar.template')
@section('title','Applicants')
@section('body')
@component('component.card')

@slot('title')
Applicants
@endslot

@slot('add_button')
@endslot

@slot('head')
	<th>Applicant Name</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($students as $student)
	<tr>
		<td>
			{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
		</td>
		<td class="text-center">
		@view
			@slot('href')
				/applicant/{{ $student->id }}/information
			@endslot
			Form and Documents
		@endview
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $students->links() }}
@endslot

@endcomponent
@endsection
