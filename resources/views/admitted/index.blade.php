@extends('registrar.template')
@section('title','Admitted Applicants')
@section('body')
@component('component.card')

@slot('title')
Admitted Applicants
@endslot

@slot('add_button')
@endslot


@slot('head')
<th>Applicant Name</th>
<th class="text-center">Action</th>
@endslot

@slot('body')
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
@endslot
		
@slot('pagination')
{{ $admittedApplicants->links() }}
@endslot

@endcomponent
@endsection

