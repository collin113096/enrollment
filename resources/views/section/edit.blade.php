@extends('registrar.template')
@section('title','Edit Section')
@section('body')
@component('component.edit.form')

@slot('url')
/sections/{{ $section->id }}
@endslot

@slot('title')
Edit Section
@endslot

@text
	@slot('label')
	Section Name
	@endslot

	@slot('name')
	name
	@endslot
	
	@slot('value')
	{{ $section->name }}
	@endslot
@endtext

@select
	@slot('label')
	Grade
	@endslot

	@slot('name')
	grade_id
	@endslot

	@foreach($grades as $grade)
		<option value="{{ $grade->id }}" {{ $grade->id == $section->grade_id ? 'selected':'' }}>{{ $grade->name }}</option>
	@endforeach
@endselect
	
@action
/sections
@endaction

@endcomponent
@endsection

