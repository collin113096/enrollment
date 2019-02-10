@extends('registrar.template')
@section('title','Create Fee')
@section('body')
@component('component.create.form')

@slot('url')
/fees
@endslot

@slot('title')
Create Fee
@endslot

@php 
$modes = [
	[
		'id' => 'Cash',
		'name' => 'Cash',
	],
	[
		'id' => 'Installment',
		'name' => 'Installment',
	]
];
@endphp

@select
	@slot('label')
	Grade
	@endslot

	@slot('name')
	grade_id
	@endslot

	@foreach($grades as $grade)
		<option value="{{ $grade->id }}">{{ $grade->name }}</option>
	@endforeach
@endselect

@select
	@slot('label')
	Payment Mode
	@endslot

	@slot('name')
	payment_mode
	@endslot

	@foreach($modes as $mode)
		<option value="{{ $mode['id'] }}">{{ $mode['name'] }}</option>
	@endforeach
@endselect

@number
	@slot('label')
		Registration
	@endslot
	@slot('name')
		registration
	@endslot
	@slot('value')
	@endslot
@endnumber

@number
	@slot('label')
	Tuition 
	@endslot

	@slot('name')
	tuition
	@endslot

	@slot('value')
	@endslot
@endnumber

@number
	@slot('label')
	Misc
	@endslot
	@slot('name')
		misc
	@endslot
	@slot('value')
	@endslot
@endnumber

@number
	@slot('label')
	Computer
	@endslot

	@slot('name')
	computer
	@endslot

	@slot('value')
	@endslot
@endnumber

@action
/fees
@endaction

@endcomponent
@endsection


