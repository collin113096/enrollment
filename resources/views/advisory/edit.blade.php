@extends('registrar.template')
@section('title','Change Adviser')
@section('body')
@component('component.card')

@slot('title')
Change adviser for <strong>{{ $section->name }}</strong> section
@endslot

@slot('add_button')
@endslot

@section('column_width')
<div class="col-md-10">
@endsection

@slot('head')
	<th>Teacher</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($teachers as $teacher)
	@if($section->teachers()->first()->id == $teacher->id)
	<tr>
		<td>
			<label class="col-form-label">{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</label>		
			<span class="badge badge-primary">Current Adviser</span>
		</td>
		<td class="text-center">					
				<button class="btn btn-success btn-sm badge-pill disabled" disabled="">Assign Adviser</button>
		</td>
	</tr>
	@else
	<tr>
		<td>
			<label class="col-form-label">{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</label>			
		</td>
		<td class="text-center">
			<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}/assign/{{ $teacher->id }}">
				@csrf
				@method('PATCH')
				<button class="btn btn-success btn-sm badge-pill" type="submit">Assign Adviser</button>
			</form>
		</td>
	</tr>
	@endif
	@endforeach
@endslot

@slot('pagination')
{{ $teachers->links() }}
@endslot

@endcomponent
@endsection