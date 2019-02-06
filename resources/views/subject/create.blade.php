@extends('create_form')
@section('title','Create Subject')
	
<!-- CARD HEADER -->
@section('card_header')
	Create Subject
@endsection

@section('card_body')
	
	<!-- SUBJECT NAME -->
	@text
		@slot('label')
		Subject Name
		@endslot
		name
		@slot('value')
		@endslot
	@endtext
	
	<!-- DESCRIPTION -->
	@textarea
		@slot('label')
		Description
		@endslot
		description
		@slot('value')
		@endslot
	@endtextarea
	
	<!-- UNIT -->
	@number
		@slot('label')
		Unit(s)
		@endslot
		unit
		@slot('value')
		@endslot
	@endnumber
	
	<!-- ACTION -->
	@action
	/subjects
	@endaction
@endsection

@section('form')
/subjects
@endsection
	
	
		
	