@extends('registrar.template')
@section('title','Create Subject')
@section('body')
@component('component.create.form')

@slot('url')
/subjects
@endslot
	
@slot('title')
Create Subject
@endslot

@text
	@slot('label')
	Subject Name
	@endslot

	@slot('name')
	name
	@endslot

	@slot('value')
	@endslot
@endtext

@textarea
	@slot('label')
	Description
	@endslot

	@slot('name')
	description
	@endslot

	@slot('value')
	@endslot
@endtextarea

<!-- UNIT -->
@number
	@slot('label')
	Unit(s)
	@endslot

	@slot('name')
	unit
	@endslot

	@slot('value')
	@endslot
@endnumber

@action
/subjects
@endaction

@endcomponent
@endsection

		
	