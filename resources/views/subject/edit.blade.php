@extends('registrar.template')
@section('title','Edit Subject')
@section('body')
@component('component.edit.form')

@slot('url')
/subjects/{{ $subject->id }}
@endslot

@slot('title')
Edit Subject
@endslot

@text
	@slot('label')
		Subject Name
	@endslot
	@slot('name')
		name
	@endslot
	@slot('value')
		{{ $subject->name }}
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
	{{ $subject->description }}
	@endslot
@endtextarea

@text
	@slot('label')
	Unit(s)
	@endslot

	@slot('name')
	unit
	@endslot

	@slot('value')
	{{ $subject->unit }}
	@endslot
@endtext

@action
/subjects
@endaction

@endcomponent
@endsection

