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

	<!-- ACTION -->
	@action
		/sections
	@endaction

@endsection

@section('form')
	/sections
@endsection

