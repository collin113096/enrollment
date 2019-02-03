@extends('template')
@section('title','Admitted')
@section('content')
<div class="col-md-8">
	<div class="card">
		<div class="card-header">
			<strong>Admitted Applicants List</strong>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>Applicant Name</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($admittedApplicants as $admittedApplicant)
					<tr>
						<td>
							{{ $admittedApplicant->last_name }}, {{ $admittedApplicant->first_name }} {{ $admittedApplicant->middle_name }}
						</td>
						<td class="d-flex justify-content-around">
							<a class="btn btn-success" href="">Register Applicant</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="py-3 d-flex justify-content-center">
		<div>
			{{ $admittedApplicants->links() }}
		</div>
	</div>
</div>
@endsection