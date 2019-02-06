@extends('create_form')
@section('title','Create Fee')

<!-- CARD HEADER -->
@section('card_header')
	Create Fee
@endsection

<!-- CARD BODY -->
@section('card_body')

	<!-- GRADE -->
	@select(['collection' => $grades])
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
	@select(['collection' => $modes])
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
		@endslot
	@endnumber

	<!-- TUITION -->
	@number
		@slot('label')
		Tuition 
		@endslot
		tuition
		@slot('value')
		@endslot
	@endnumber
	
	<!-- MISC -->
	@number
		@slot('label')
		Misc
		@endslot
		misc
		@slot('value')
		@endslot
	@endnumber
	
	<!-- COMPUTER -->
	@number
		@slot('label')
		Computer
		@endslot
		computer
		@slot('value')
		@endslot
	@endnumber

	<!-- ACTION -->
	@component('action')
	/fees
	@endcomponent

<!-- END OF CARD BODY -->
@endsection

@section('form')
/fees
@endsection
