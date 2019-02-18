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
		<div class="row">
			@foreach($section->students as $student)
			<div class="col-md-5 mb-4">
				<div class="card">
					<div class="card-body">
						@php $url = $student->documents->where('document_type','Picture')->first()->url @endphp
						<div class="row mb-2">
							<div class="col-md-4">
								<img class="rounded-circle d-block mx-auto" src='{{ asset("storage/$url") }}' width="80px">
							</div>
							<div class="col-md-8">
								<div class="mt-3 text-sm-center-custom">{{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}</div>
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
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
