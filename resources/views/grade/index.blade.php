@extends('registrar.template')
@section('title','All Grade')
@section('body')
@component('component.card')

@slot('title')
All Grade
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/grades/create"
	@endslot
@endadd
@endslot

@slot('head')
	<th>Grade Name</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($grades as $grade)
	<tr>
		<td>{{ $grade->name }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/grades/{{ $grade->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/grades/{{ $grade->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $grades->links() }}
@endslot

@endcomponent
@endsection

