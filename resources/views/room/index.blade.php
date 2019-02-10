@extends('registrar.template')
@section('title','All Rooms')
@section('body')
@component('component.card')

@slot('title')
All Rooms
@endslot

@slot('add_button')
@add
	@slot('href')
		href="/rooms/create"
	@endslot
@endadd
@endslot

@slot('head')
	<th>Room Name</th>
	<th class="text-center">Action</th>
@endslot

@slot('body')
	@foreach($rooms as $room)
	<tr>
		<td>{{ $room->name }}</td>
		<td class="text-center">
		@edit
			@slot('href')
				href="/rooms/{{ $room->id }}/edit"
			@endslot
		@endedit

		@delete
			@slot('action')
				action="/rooms/{{ $room->id }}"
			@endslot
		@enddelete
		</td>
	</tr>
	@endforeach
@endslot

@slot('pagination')
{{ $rooms->links() }}
@endslot

@endcomponent
@endsection
