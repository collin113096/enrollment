@extends('main')
@section('title','All Rooms')
@section('card_header','All Rooms')

@section('add_button')
@component('add_button')
	@slot('href')
		href="/rooms/create"
	@endslot
@endcomponent
@endsection

@section('table_head')
	<th>Room Name</th>
	<th class="text-center">Action</th>
@endsection

@section('table_body')
	@foreach($rooms as $room)
	<tr>
		<td>{{ $room->name }}</td>
		<td class="text-center">
		@component('edit_button')
			@slot('href')
				href="/rooms/{{ $room->id }}/edit"
			@endslot
		@endcomponent

		@component('delete_button')
			@slot('action')
				action="/rooms/{{ $room->id }}"
			@endslot
		@endcomponent
		</td>
	</tr>
	@endforeach
@endsection

@section('pagination')
{{ $rooms->links() }}
@endsection

