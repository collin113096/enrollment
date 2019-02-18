@extends('registrar.template')
@section('title','All Grade')
@section('body_width')
<div class="col-md-9">
@endsection
@section('body')
<style>
	@media screen and (max-width:425px){
		.text-sm-center-custom{
			text-align: center;
		}
	}
</style>
<div class="card mb-3">
	<div class="card-header h5 text-white p-4 bg-dark">
		<strong>SECTION - {{ $section->name }}</strong>
	</div>
	<div class="card-body">
		<div class="row justify-content-center">
			@foreach($section->students as $student)
			<div class="col-md-5 mb-4">
				<div class="card">

					<div class="card-body">
						@php $url = $student->documents->where('document_type','Picture')->first()->url @endphp
						<div class="row mb-1">
							<div class="col-md-4 d-flex align-items-center">
								<img class="rounded-circle d-block mx-auto" src='{{ asset("storage/$url") }}' width="80px">
							</div>
							<div class="col-md-8">
								<div class="mt-3 text-sm-center-custom mb-1">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</div>
								<div class="d-flex justify-content-between">
									<strong><span>{{ date('Y')-date('Y',strtotime($student->birth_date)) }} Years Old</span></strong>
									<strong><span>{{ ucfirst($student->gender) }}</span></strong>
								</div>
							</div>
						</div>
					</div>

					<div class="card-footer">
							<button class="btn btn-sm badge-pill">Personal Info</button>
							<button class="btn btn-sm badge-pill">Documents</button>
							<button class="btn btn-sm badge-pill">Grades</button>
					</div>

				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
