@extends('registrar.template')
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
				<span class="font-weight-bold">6</span>
			</div>
			<div class="mb-4" style="height:320px;overflow-y: scroll;">						
				<div class="list-group-flush">
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
				</div>
			</div>

			<div class="d-flex text-danger">
				<strong>Female</strong> - 
				<span class="font-weight-bold">6</span>
			</div>
			<div style="height:320px;overflow-y: scroll;">
				<div class="list-group-flush">
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
					<div class="list-group-item list-group-item-action">
						<span class="mx-3">
							<img class="rounded-circle" src="{{ asset('images/student_picture.jpg') }}" width="30px" height="30px">
						</span>
						<span>Jiyo Collin Pagtananan</span>
					</div>
				</div>
			</div>
		</div>
		<!-- END -->
	</div>
</div>
@endsection