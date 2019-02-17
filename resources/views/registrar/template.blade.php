@extends('layouts.app')
@section('title','Registrar')
<style>
	.dropdown-menu a {
    color: #777;
}
</style>
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<div class="card">
				<div class="card-body">
					<div class="form-group text-center py-3">
						<label class=""><strong>School Year</strong></label>
						<select class="custom-select" name="" id="">
							<option value="2019">2019</option>
						</select>
						<a href=""><u>Statistics</u></a>
					</div>
					<div class="h5 pt-3 text-center text-primary">
						<strong>GRADES</strong>
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

		<div class="col-md-7">
			@section('body')
				@include('registrar.default')
			@show
		</div>	
		<div class="col-md-3">
			@section('students')
			<div class="card">
				<div class="card-header h5 d-flex justify-content-between text-primary">
					<strong>STUDENTS</strong>
					<span class="font-weight-bold">0</span>
				</div>
				<div class="card-body">
					<div style="font-size:11px">
						<div class="d-flex text-secondary">
							<strong>Male</strong> - 
							<span class="font-weight-bold">6</span>
						</div>
						<div class="mb-4" style="height:320px;overflow-y: scroll;">						
							<div class="list-group-flush">
								<div class="alert alert-warning mt-3">No Record Found</div>
							</div>
						</div>

						<div class="d-flex text-danger">
							<strong>Female</strong> - 
							<span class="font-weight-bold">6</span>
						</div>
						<div style="height:320px;overflow-y: scroll;">
							<div class="list-group-flush">
								<div class="alert alert-warning mt-3">No Record Found</div>
							</div>
						</div>
					</div>
					<!-- END -->
				</div>
			</div>
			@show
		</div>
	</div>
</div>
@endsection

@include('registrar.right_side_navbar')