@extends('registrar.template')
@section('title','Edit Fee')
@section('body')
@component('component.edit.form')

@slot('url')
/fees/{{ $fee->id }}
@endslot

@slot('title')
Edit Fee
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
		<option value="{{ $grade->id }}" {{ $grade->id == $fee->grade_id ? 'selected':'' }}>{{ $grade->name }}</option>
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
		<option value="{{ $mode['id'] }}" {{ $mode['id'] == $fee->payment_mode ? 'selected':'' }}>{{ $mode['name'] }}</option>
	@endforeach
@endselect

@number
	@slot('label')
	Registration Fee
	@endslot

	@slot('name')
	registration
	@endslot

	@slot('value')
	{{ $fee->registration }}
	@endslot
@endnumber

@number
	@slot('label')
	Tuition Fee
	@endslot

	@slot('name')
	tuition
	@endslot

	@slot('value')
	{{ $fee->tuition }}
	@endslot
@endnumber

@number
	@slot('label')
	Misc Fee
	@endslot

	@slot('name')
	misc
	@endslot

	@slot('value')
	{{ $fee->misc }}
	@endslot
@endnumber

@number
	@slot('label')
	Computer Fee
	@endslot

	@slot('name')
	computer
	@endslot

	@slot('value')
	{{ $fee->registration }}
	@endslot
@endnumber

@number
	@slot('label')
	Internet Fee
	@endslot

	@slot('name')
	internet
	@endslot

	@slot('value')
	{{ $fee->internet }}
	@endslot
@endnumber

@action
/fees
@endaction

@endcomponent
@endsection





	