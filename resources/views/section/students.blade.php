@extends('registrar.template')

@section('title')
{{ $section->name }} - Student List
@endsection

@section('body')
<div class="card mb-3">
	<div class="card-header h5 text-white p-4 bg-dark">
		<strong class="text-uppercase">{{ $section->name }} - Student List</strong>
	</div>
	<div class="card-body">
		<div class="row justify-content-center">
			@foreach($section->students as $student)
				@component('section.component.students',['student' => $student])
				@endcomponent
			@endforeach
		</div>
	</div>
</div>
@endsection
