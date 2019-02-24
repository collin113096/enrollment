@extends('registrar.template')
@section('body')
<div class="card">
	<div class="card-header">
		Teacher Subjects
	</div>
	<div class="card-body">
		
		<div class="mb-3">
			<button class="btn btn-primary">Add Subject</button>
			<button class="btn btn-danger">Delete Subject</button>
		</div>

		<!-- FIRST ROW -->
		<div class="row">
			<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					@php $url = $teacher->photo @endphp
					<div class="form-group">
						<div class="text-center">
							<img class="w-25 rounded-circle" src='{{ asset("images/user.jpg") }}'>
						</div>
					</div>
				</div>
				<div class="card-footer text-center">
					<div><strong>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</strong></div>
					<small>{{ $teacher->job_type }}</small>
				</div>
			</div>
			</div>
		</div>

		<!-- SECOND ROW -->
		<table class="table">
			<tbody>
				
			</tbody>
		</table>


	</div>
</div>
@endsection