@extends('registrar.template')

@section('title')
{{ $grade->name }} - Section List
@endsection

@section('body')
<div class="card mb-3">

	<div class="card-header h5 text-white p-4 bg-dark">
		<strong class="text-uppercase">{{ $grade->name }} - Section List</strong>
	</div>

	<div class="card-body">
		<div class="row">
			@foreach($grade->sections as $section)
				@component('grade.component.section',['section' => $section])
				@endcomponent
			@endforeach
		</div>
	</div>

</div>
@endsection
