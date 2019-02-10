@extends('registrar.template')
@section('title','Edit Teacher')
@section('body')
@component('component.edit.form')

@slot('url')
/teachers/{{ $teacher->id }}
@endslot

@slot('title')
Edit Teacher
@endslot

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

@endcomponent
@endsection

