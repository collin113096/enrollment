@extends('registrar.template')
@section('title','Create Teacher')
@section('body')
@component('component.create.form')

@slot('url')
/teachers
@endslot

@slot('title')
Create Teacher
@endslot

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

@php
$options = [
	['name' => 'Elementary Teacher'],
	['name' => 'Junior High School Teacher']
];
@endphp

@list(compact('options'))
	@slot('label')
	Classification
	@endslot

	@slot('name')
	classification
	@endslot

	@slot('value')
	@endslot
@endlist

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

@endcomponent
@endsection

