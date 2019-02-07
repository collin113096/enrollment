@extends('create_form')
@section('title','Register Student')

	@section('card_header')
		Register
	@endsection

	@section('card_body')
		@text
			@slot('label')
				Student LRN
			@endslot
			@slot('name')
				student_lrn
			@endslot
			@slot('value')
			@endslot
		@endtext

		@text
			@slot('label')
				School Year
			@endslot
			@slot('name')
				school_year
			@endslot
			@slot('value')
			@endslot
		@endtext

		@select
			@slot('label')
				Section
			@endslot
			@slot('name')
				section_id
			@endslot
			@foreach($sections as $section)
				<option value="{{ $section->id }}">{{ $section->name }}</option>
			@endforeach
		@endselect

		@action
			/sections
		@endaction
	@endsection

@section('form')
/registers/{{ $student->id }}
@endsection


