@extends('registrar.template')
@section('body')
<div class="card">
	<div class="card-header">
		Payroll
	</div>
	<div class="card-body">
		<div class="row text-center">
			@foreach($teachers as $teacher)   
				<div class="col-md-4 mb-3">
					<a href="/payrolls/{{ $teacher->id }}">
					<div class="card">
						<div class="card-body">
							@php $url = $teacher->photo @endphp
							<div class="form-group">
								<div class="text-center">
									<img class="w-75 rounded-circle" src='{{ asset("images/user.jpg") }}'>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div><strong>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</strong></div>
							<small>{{ $teacher->job_type }}</small>
						</div>
					</div>
					</a>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection