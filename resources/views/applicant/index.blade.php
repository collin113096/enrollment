@extends('template')
@section('title','Applicants')
@section('content')
<div class="col-md-9">
	<div class="card">
		<div class="card-header">
			<strong>Applicants List</strong>
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
							<a class="btn btn-primary" href="{{ route('applicant.show',compact('student')) }}">Show Applicant Form</a>
							<a class="btn btn-secondary" href="{{ route('applicant.show',compact('student')) }}">Show Documents</a>
							<form class="m-0" method="post" action="/applicants/{{ $student->id }}">
								@csrf
								@method('PATCH')
								<button class="btn btn-success" type="submit">Admit Student</button>
							</form>
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