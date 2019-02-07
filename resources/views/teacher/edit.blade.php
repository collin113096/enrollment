@extends('edit_form')
@section('title','Edit Teacher')

@section('card_header')
	Edit Teacher
@endsection

@section('card_body')
	
	<!-- LAST NAME -->
	@text
		@slot('label')
			Last Name
		@endslot
		@slot('name')
			last_name
		@endslot
		@slot('value')
			{{ $teacher->last_name }}
		@endslot
	@endtext

	<!-- FIRST NAME -->
	@text
		@slot('label')
			First Name
		@endslot
		@slot('name')
			first_name
		@endslot
		@slot('value')
			{{ $teacher->first_name }}
		@endslot
	@endtext

	<!-- MIDDLE NAME -->
	@text
		@slot('label')
			Middle Name
		@endslot
		@slot('name')
			middle_name
		@endslot
		@slot('value')
			{{ $teacher->middle_name }}
		@endslot
	@endtext

	<!-- CLASSIFICATION -->
	@text
		@slot('label')
			Classification
		@endslot
		@slot('name')
			classification
		@endslot
		@slot('value')
			{{ $teacher->classification }}
		@endslot
	@endtext

	<!-- BIRTH DATE -->
	@date
		@slot('label')
			Birth Date
		@endslot
		@slot('name')
			birth_date
		@endslot
		@slot('value')
			{{ $teacher->birth_date }}
		@endslot
	@enddate

	<hr>

	<!-- HOME ADDRESS -->
	@text
		@slot('label')
			Home Address
		@endslot
		@slot('name')
			home_address
		@endslot
		@slot('value')
			{{ $teacher->home_address }}
		@endslot
	@endtext

	<!-- EMAIL -->
	@email
		@slot('label')
			Email
		@endslot
		@slot('name')
			email
		@endslot
		@slot('value')
			{{ $teacher->email }}
		@endslot
	@endemail

	<!-- CONTACT -->
	@number
		@slot('label')
			Contact
		@endslot
		@slot('name')
			contact
		@endslot
		@slot('value')
			{{ $teacher->contact }}
		@endslot
	@endnumber

	@action
		/teachers/{{ $teacher->id }}
	@endaction

@endsection

@section('form')
	/teachers/{{ $teacher->id }}
@endsection