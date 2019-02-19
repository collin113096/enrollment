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

				@component('grade.component.section',['section' => $section, 'loop' => $loop])
				@endcomponent

				@component('grade.component.adviser',['adviser' => $section->teachers->first(), 'loop' => $loop])
				@endcomponent

			
			@endforeach
		</div>
	</div>

</div>
@endsection
