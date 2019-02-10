@extends('registrar.template')
@section('title','Create Grade')
@section('body')
@component('component.create.form')

@slot('url')
/grades
@endslot

@slot('title')
Create Grade
@endslot

@text
	@slot('label')
	Grade Name
	@endslot

	@slot('name')
	name
	@endslot

	@slot('value')
	@endslot
@endtext

@action
/grades
@endaction

@endcomponent
@endsection

