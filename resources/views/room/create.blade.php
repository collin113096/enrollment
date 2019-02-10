@extends('registrar.template')
@section('title','Create Room')
@section('body')
@component('component.create.form')

@slot('url')
/rooms
@endslot

@slot('title')
Create Room
@endslot

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

@endcomponent
@endsection

