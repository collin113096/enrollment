@extends('create_form')
@section('title','Create Room')

@section('card_header')
Create Room
@endsection

@section('card_body')
	@text
		@slot('label')
			Room Name
		@endslot
		@slot('name')
			name
		@endslot
		@slot('value')
		@endslot
	@endtext

	@action
		/rooms
	@endaction
@endsection

@section('form')
/rooms
@endsection
