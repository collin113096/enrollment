@extends('registrar.template')
@section('title','Edit Room')
@section('body')
@component('component.edit.form')

@slot('url')
	/rooms/{{ $room->id }}
@endslot

@slot('title')
	Edit Room
@endslot

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

@endcomponent
@endsection
	
