@extends('edit_form')
@section('title','Edit Subject')

@section('card_header')
	Edit Subject
@endsection

@section('card_body')
	
	<!-- SUBJECT NAME -->
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

	<!-- DESCRIPTION -->
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

	<!-- SUBJECT NAME -->
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

	<!-- ACTION -->
	@action
		/subjects
	@endaction
@endsection

@section('form')
	/subjects/{{ $subject->id }}
@endsection