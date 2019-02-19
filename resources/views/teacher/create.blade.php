@extends('registrar.template')
@section('title','Create Teacher')
@section('body')
@component('component.create.form')

@section('enctype')
<form method="post" action="/teachers" enctype="multipart/form-data">
@endsection

@slot('url')
@endslot

@slot('title')
Create Teacher
@endslot

@file
	@slot('label')
	Upload Photo
	@endslot

	@slot('name')
	photo
	@endslot

	@slot('for')
	photo
	@endslot
@endfile

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
	Job Type
	@endslot

	@slot('name')
	job_type
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

@date
	@slot('label')
	Date Registered
	@endslot

	@slot('name')
	date_registered
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

