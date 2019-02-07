@extends('edit_form')
@section('title','Edit Grade')

@section('card_header')
	Edit Grade
@endsection

@section('card_body')
	
	@text
		@slot('label')
			Grade Name
		@endslot
		@slot('name')
			name
		@endslot
		@slot('value')
			{{ $grade->name }}
		@endslot
	@endtext

	@action
		/grades
	@endaction
@endsection
	
@section('form')
	/grades/{{ $grade->id }}
@endsection