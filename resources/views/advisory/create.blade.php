@extends('registrar.template')
@section('title','Assign Adviser')
@section('body')
@component('component.card')

@slot('title')
	Assign adviser for <strong>{{ $section->name }}</strong> section
@endslot

@slot('add_button')
@endslot

@slot('head')
	<th>Teacher</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($teachers as $teacher)
		<tr>
			<td>
				{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}
			</td>
			<td class="text-center">
				<form class="d-inline m-0" method="post" action="/advisory/{{ $section->id }}/assign/{{ $teacher->id }}">
					@csrf
					<button class="btn btn-success btn-sm badge-pill" type="submit">Assign Adviser</button>
				</form>
			</td>
		</tr>
	@endforeach
@endslot
	
@slot('pagination')
	{{ $teachers->links() }}
@endslot

@endcomponent
@endsection