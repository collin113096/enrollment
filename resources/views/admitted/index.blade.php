@extends('main')
@section('title','Admitted Applicants')
@section('card_header','Admitted Applicants')

@section('table_head')
<th>Applicant Name</th>
<th class="text-center">Action</th>
@endsection

@section('table_body')
@foreach($admittedApplicants as $admittedApplicant)
<tr>
	<td>
		{{ $admittedApplicant->last_name }}, {{ $admittedApplicant->first_name }} {{ $admittedApplicant->middle_name }}
	</td>
	<td class="text-center">
		<a class="btn btn-success btn-sm badge-pill" href="/registers/{{ $admittedApplicant->id }}">Register Applicant</a>
	</td>
</tr>
@endforeach
@endsection
		
@section('pagination')
{{ $admittedApplicants->links() }}
@endsection
