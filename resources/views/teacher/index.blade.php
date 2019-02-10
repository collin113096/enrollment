@extends('registrar.template')
@section('title','All Teachers')
@section('body')
@component('component.card')

@slot('title')
All Teachers
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/teachers/create"
	@endslot
@endadd
@endslot

@slot('head')
	<th>Teacher Name</th>
	<th>Classification</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($teachers as $teacher)
	<tr>
		<td>{{ $teacher->last_name }}, {{ $teacher->first_name }} {{ $teacher->middle_name }}</td>
		<td>{{ $teacher->classification }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/teachers/{{ $teacher->id }}"
			@endslot
			@section('name')
				<i class="fas fa-eye"></i> View
			@endsection
		@endedit

		@delete
			@slot('action')
				action="/teachers/{{ $teacher->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $teachers->links() }}
@endslot

@endcomponent
@endsection

