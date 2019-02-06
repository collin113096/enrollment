@extends('create_form')
@section('title','Create Grade')
@section('content')

<!-- CARD HEADER -->
@section('card_header')
	Create Grade
@endsection

<!-- CARD BODY -->
@section('card_body')
	
	<!-- GRADE NAME -->
	@text
		@slot('label')
		Grade Name
		@endslot
		name
		@slot('value')
		@endslot
	@endtext
	
	<!-- ACTION -->
	@action
	/grades
	@endaction

@endsection

@section('form')
/grades
@endsection
