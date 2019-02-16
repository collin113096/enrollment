@extends('registrar.template')
@section('body')
<div class="card">
	<div class="card-header h5 text-primary">
		<strong>SECTION</strong>
	</div>
	<div class="card-body">
		<div class="row">
			@foreach($section->grade->sections as $section)
			<div class="col-md-6 mb-4">
				<div class="card bg-dark text-white">
					<div class="card-img-top">
						<img class="w-100" src="{{ asset('images/facility/arch.jpg') }}" alt="">
					</div>
					<div class="card-body text-center">
						<div class="py-4">
							<h1 class="text-uppercase"><strong>{{ $section->name }}</strong></h1>
						</div>
						<div class="mb-3">
							<label for="">Section Adviser:</label>
							<h6><a href="">
								@if($section->teachers->count())
								{{ $section->teachers->first()->last_name }}, 
								{{ $section->teachers->first()->first_name }}
								{{ $section->teachers->first()->middle_name }}
								@else
									No Adviser
								@endif
							</a></h6>
						</div>
						<div>
							<h3><a href="/section/{{ $section->id }}/students">{{ $section->registers->count() }} Students</a></h3>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
@section('students')
<div class="card">
	<div class="card-header h5 d-flex justify-content-between text-primary">
		<strong>STUDENTS</strong>
		<span class="font-weight-bold">{{ $section->students->count() }}</span>
	</div>
	<div class="card-body">
		<div style="font-size:11px">
			<div class="d-flex text-secondary">
				<strong>Male</strong> - 
				<span class="font-weight-bold">{{ $section->students->where('gender','male')->count() }}</span>
			</div>
			<div class="mb-4" style="height:320px;overflow-y: scroll;">						
				<div class="list-group-flush">

					@forelse($section->students->where('gender','male') as $student)
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>
							{{ $student->last_name }}, 
							{{ $student->first_name }}
							{{ $student->middle_name }}
						</span>
					</div>
					@empty
					<div class="alert alert-warning mt-3">No Records Found</div>
					@endforelse
				</div>
			</div>

			<div class="d-flex text-danger">
				<strong>Female</strong> - 
				<span class="font-weight-bold">{{ $section->students->where('gender','female')->count() }}</span>
			</div>
			<div style="height:320px;overflow-y: scroll;">
				<div class="list-group-flush">
					
					@forelse($section->students->where('gender','female') as $student)
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>
							{{ $student->last_name }}, 
							{{ $student->first_name }}
							{{ $student->middle_name }}
						</span>
					</div>
					@empty
					<div class="alert alert-warning mt-3">No Records Found</div>
					@endforelse

				</div>
			</div>
		</div>
		<!-- END -->
	</div>
</div>
@endsection