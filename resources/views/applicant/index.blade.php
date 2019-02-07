@extends('main')
@section('title','Applicants')
@section('card_header','Applicants')

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
		@view
			@slot('href')
				/applicant/{{ $student->id }}/information
			@endslot
			Form and Documents
		@endview
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $students->links() }}
@endsection

