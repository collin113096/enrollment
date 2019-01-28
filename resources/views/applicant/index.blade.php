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
						<th>Date Submitted</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($students as $student)
					<tr>
						<td>{{ $student->last_name }}, {{ $student->first_name }} {{ $student->first_name }}</td>
						<td>{{ date('i',time() - strtotime($student->created_at)) }} Minutes Ago</td>
						<td>
							<a class="btn btn-primary" href="{{ route('applicant.show',compact('student')) }}">View Documents</a>
							<a class="btn btn-light" href="{{ route('applicant.show',compact('student')) }}">Details</a>
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