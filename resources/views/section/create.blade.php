@extends('create_form')
@section('title','Create Section')
@section('content')

@section('card_header')
Create Section
@endsection

@section('card_body')
	
	<!-- SECTION NAME -->
	@text
		@slot('label')
		Section Name
		@endslot
		name
		@slot('value')
		@endslot
	@endtext

	<!-- GRADE -->
	@select(['collection' => $grades])
		@slot('label')
		Grade
		@endslot
		@slot('name')
		grade_id
		@endslot
	@endselect

	<!-- ACTION -->
	@action
	/sections
	@endaction

@endsection

@section('form')
/sections
@endsection

