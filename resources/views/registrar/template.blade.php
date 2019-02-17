@extends('layouts.app')
@section('title','Registrar')
<style>
	#management .dropdown-menu a {
    color: #777;
}

/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background:#fafafa;
  border-radius: 5px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}

</style>
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card mb-3 shadow">
				<div class="card-header h5 pt-3 text-center">
					Grades
				</div>
				<div class="card-body">
					<div class="form-group text-center py-3">
						<label class=""><strong>School Year</strong></label>
						<select class="custom-select" name="" id="">
							<option value="2019">2019</option>
						</select>
						<a href=""><u>Statistics</u></a>
					</div>
					<div class="list-group list-group-flush">
						@foreach($grades as $grade)
						<a href="/grade/{{ $grade->id }}/sections" class="list-group-item list-group-item-action d-flex justify-content-between">
							<span>{{ $grade->name }}</span>
							<span class="font-weight-bold">{{ $grade->countStudent() }}</span>
						</a>
						@endforeach
						@inject('registers','App\Register')
						<div class="text-center pt-4">	
							<h1>{{ $registers->count() }}</h1>
							<h5>Student(s)</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		@section('body_width')
		<div class="col-md-9">
		@show
		@section('body')
			@include('registrar.default')
		@show
		</div>	

		@section('students_width')
		<div class="col-md-3">
		@show
		@section('students')
		@show
		</div>
	</div>
</div>
@endsection

@include('registrar.right_side_navbar')