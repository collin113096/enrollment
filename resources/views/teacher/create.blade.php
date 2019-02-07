@extends('create_form')
@section('title','Create Teacher')

@section('card_header')
Create Teacher
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
		@endslot
	@endtext

	@date
		@slot('label')
			Birth Date
		@endslot
		@slot('name')
			birth_date
		@endslot
		@slot('value')
		@endslot
	@enddate

	<hr>

	@text
		@slot('label')
			Home Address
		@endslot
		@slot('name')
			home_address
		@endslot
		@slot('value')
		@endslot
	@endtext

	@email
		@slot('label')
			Email
		@endslot
		@slot('name')
			email
		@endslot
		@slot('value')
		@endslot
	@endemail

	@number
		@slot('label')
			Contact
		@endslot
		@slot('name')
			contact
		@endslot
		@slot('value')
		@endslot
	@endnumber

	@action
	/teachers
	@endaction

@endsection

@section('form')
/teachers
@endsection

