@extends('registrar.template')
@section('title','All Times')
@section('body')
@component('component.card')

@slot('title')
All Times
@endslot

@slot('add_button')
@add
	@slot('href')
	href="/times/create"
	@endslot
@endadd
@endslot

@slot('head')
	<th>Time In</th>
	<th>Time Out</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($times as $time)
	<tr>
		<td>{{ date('h:i A', strtotime($time->in)) }}</td>
		<td>{{ date('h:i A', strtotime($time->out)) }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/times/{{ $time->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/times/{{ $time->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $times->links() }}
@endslot

@endcomponent
@endsection
