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
		last_name
		@slot('value')
		@endslot
	@endtext

	<!-- FIRST NAME -->
	@text
		@slot('label')
		First Name
		@endslot
		first_name
		@slot('value')
		@endslot
	@endtext

	<!-- MIDDLE NAME -->
	@text
		@slot('label')
		Middle Name
		@endslot
		middle_name
		@slot('value')
		@endslot
	@endtext

	<!-- CLASSIFICATION -->
	@text
		@slot('label')
		Classification
		@endslot
		classification
		@slot('value')
		@endslot
	@endtext

	@date
		@slot('label')
		Birth Date
		@endslot
		birth_date
		@slot('value')
		@endslot
	@enddate

	<hr>

	@text
		@slot('label')
		Home Address
		@endslot
		home_address
		@slot('value')
		@endslot
	@endtext

	@email
		@slot('label')
		Email
		@endslot
		email
		@slot('value')
		@endslot
	@endemail

	@number
		@slot('label')
		Contact
		@endslot
		contact
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

