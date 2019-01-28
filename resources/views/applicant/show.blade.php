@extends('template')
@section('title','Applicant')
@section('content')
<div class="col-md-10">
	<div class="card text-center">
		<div class="card-header h1 p-md-5">
			Documents of {{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
		</div>
		<div class="card-body">		
			@foreach($student->documents as $document)
			<div class="py-md-1">
				<img class="w-100 img-thumbnail" src='{{ asset("/storage/$document->url") }}' alt="">
				<span class="text-center h5 d-block text-secondary mt-4">
					Document {{ $loop->iteration }} - 
					{{ $document->document_type }}
				</span>		
			</div>
			<hr>
			@endforeach
		</div>
		<div class="card-footer d-flex justify-content-between">
			<button class="btn btn-light">Denied</button>
			<button class="btn btn-success">Admit Student</button>
		</div>
	</div>
</div>
@endsection