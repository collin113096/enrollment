@extends('main')
@section('title','All Rooms')
@section('card_header','All Rooms')

@section('add_button')
@add
	@slot('href')
		href="/rooms/create"
	@endslot
@endadd
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
@endsection

@section('pagination')
{{ $rooms->links() }}
@endsection

