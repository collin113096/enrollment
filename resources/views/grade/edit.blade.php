@extends('registrar.template')
@section('title','Edit Grade')
@section('body')
@component('component.edit.form')

@slot('url')
	/grades/{{ $grade->id }}
@endslot

@slot('title')
	Edit Grade
@endslot

@text
	@slot('label')
		Grade Name
	@endslot
	@slot('name')
		name
	@endslot
	@slot('value')
		{{ $grade->name }}
	@endslot
@endtext

@action
	/grades
@endaction

@endcomponent
@endsection
	
