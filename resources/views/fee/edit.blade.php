@extends('edit_form')
@section('title','Edit Fee')

<!-- CARD HEADER -->
@section('card_header')
	Edit Fee
@endsection

<!-- CARD BODY -->
@section('card_body')

	<!-- GRADE -->
	@select(['collection' => $grades, 'fee' => $fee])
		@slot('label')
		Grade
		@endslot
		@slot('name')
		grade_id
		@endslot
	@endselect

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

	<!-- PAYMENT MODE -->
	@select(['collection' => $modes, 'modes' => $fee])
		@slot('label')
		Payment Mode
		@endslot
		@slot('name')
		payment_mode
		@endslot
	@endselect
	
	<!-- REGISTRATION -->
	@number
		@slot('label')
		Registration
		@endslot
		registration
		@slot('value')
		{{ $fee->registration }}
		@endslot
	@endnumber

	<!-- TUITION -->
	@number
		@slot('label')
		Tuition 
		@endslot
		tuition
		@slot('value')
		{{ $fee->tuition }}
		@endslot
	@endnumber
	
	<!-- MISC -->
	@number
		@slot('label')
		Misc
		@endslot
		misc
		@slot('value')
		{{ $fee->misc }}
		@endslot
	@endnumber
	
	<!-- COMPUTER -->
	@number
		@slot('label')
		Computer
		@endslot
		computer
		@slot('value')
		{{ $fee->registration }}
		@endslot
	@endnumber

	<!-- ACTION -->
	@component('action')
	/fees
	@endcomponent

<!-- END OF CARD BODY -->
@endsection

@section('form')
/fees/{{ $fee->id }}
@endsection



	