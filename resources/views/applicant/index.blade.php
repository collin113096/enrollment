@extends('template')
@section('title','Applicants')
@section('content')
<div class="col-md-8">
	<div class="card">
		<div class="card-header">
			Applicants List
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
					@foreach($students as $student)
					<tr>
						<td>
							{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
						</td>
						<td class="d-flex justify-content-around">
							<a 
								class="btn btn-primary" 
								href="/applicant/{{ $student->id }}/information">View Student Information</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="py-3 d-flex justify-content-center">
		<div>
			{{ $students->links() }}
		</div>
	</div>
</div>
@endsection