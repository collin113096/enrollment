@extends('edit_form')
@section('title','Edit Room')

@section('card_header')
	Edit Room
@endsection

@section('card_body')

	<!-- ROOM NAME -->
	@text
		@slot('label')
			Room Name
		@endslot
		@slot('name')
			name
		@endslot
		@slot('value')
			{{ $room->name }}
		@endslot
	@endtext
	@action
		/rooms
	@endaction
@endsection
	
@section('form')
	/rooms/{{ $room->id }}
@endsection