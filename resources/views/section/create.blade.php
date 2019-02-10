@extends('registrar.template')
@section('title','Create Section')
@section('body')
@component('component.create.form')

@slot('url')
	/sections
@endslot

@slot('title')
Create Section
@endslot

@text
	@slot('label')
	Section Name
	@endslot

	@slot('name')
	name
	@endslot

	@slot('value')
	@endslot
@endtext

<!-- GRADE -->
@select
	@slot('label')
	Grade
	@endslot

	@slot('name')
	grade_id
	@endslot

	@foreach($grades as $grade)
		<option value="{{ $grade->id }}">{{ $grade->name }}</option>
	@endforeach
@endselect

@action
/sections
@endaction

@endcomponent
@endsection
