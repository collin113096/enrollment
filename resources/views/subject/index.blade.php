@extends('registrar.template')
@section('title','All Subject')
@section('body')
@component('component.card')

@slot('title')
All Subject
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/subjects/create"
	@endslot
@endadd
@endslot

@slot('head')
	<th>Subject Name</th>
	<th>Description</th>
	<th>Unit(s)</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($subjects as $subject)
	<tr>
		<td>{{ $subject->name }}</td>
		<td>{{ $subject->description }}</td>
		<td>{{ $subject->unit }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/subjects/{{ $subject->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/subjects/{{ $subject->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $subjects->links() }}
@endslot

@endcomponent
@endsection

