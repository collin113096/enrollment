@extends('template')
@section('title','Applicants')
@section('content')
<div class="col-md-8">
	<div class="card">
		<div class="card-header">
			<strong>Applicants List</strong>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<tr>
						<th>Applicant Name</th>
						<th>Grade</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($students as $student)
					<tr>
						<td>
							{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
						</td>
						<td>{{ $student->grade }}</td>
						<td class="d-flex justify-content-around">
							<a 
								class="btn btn-primary" 
								href="/applicant/{{ $student->id }}/documents">Show Documents</a>
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