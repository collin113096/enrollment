@extends('registrar.template')
@section('title','All Sections')
@section('body')
@component('component.card')

@slot('title')
All Sections
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/sections/create"
	@endslot
@endadd
@endslot

@slot('head')
	<th>Section Name</th>
	<th>Grade</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($sections as $section)
	<tr>
		<td>{{ $section->name }}</td>
		<td>{{ $section->grade->name }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/sections/{{ $section->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/sections/{{ $section->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $sections->links() }}
@endslot

@endcomponent
@endsection
