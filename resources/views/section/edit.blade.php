@extends('edit_form')
@section('title','Edit Section')

@section('card_header')
	Edit Section
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
			{{ $section->name }}
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
			<option value="{{ $grade->id }}" {{ $grade->id == $section->grade_id ? 'selected':'' }}>{{ $grade->name }}</option>
		@endforeach
	@endselect
		
	@action
		/sections
	@endaction

@endsection

@section('form')
	/sections/{{ $section->id }}
@endsection