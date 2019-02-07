@extends('edit_form')
@section('title','Edit Student Registration')
@section('card_header', 'Edit Student Registration')

@section('card_body')

	<!-- STUDENT LRN -->
	@text
		@slot('label')
			Student LRN
		@endslot
		@slot('name')
			student_lrn
		@endslot
		@slot('value')
			{{ $register->student_lrn }}
		@endslot
	@endtext

	<!-- SCHOOL YEAR -->
	@text
		@slot('label')
			School Year
		@endslot
		@slot('name')
			school_year
		@endslot
		@slot('value')
			{{ $register->school_year }}
		@endslot
	@endtext

	<!-- SECTION -->
	@select
		@slot('label')
			Section
		@endslot
		@slot('name')
			section_id
		@endslot
		@foreach($sections as $section)
			<option value="{{ $section->id }}" {{ $section->id == $register->section_id ? 'selected':'' }}>{{ $section->name }}</option>
		@endforeach		
	@endselect

	@action
		/registers
	@endaction
@endsection

@section('form')
	/registers/{{ $register->id }}
@endsection