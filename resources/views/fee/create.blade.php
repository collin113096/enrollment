@extends('create_form')
@section('title','Create Fee')

<!-- CARD HEADER -->
@section('card_header')
	Create Fee
@endsection

<!-- CARD BODY -->
@section('card_body')

	<!-- GRADE -->
	@component('select', ['collection' => $grades])
		@slot('label')
		Grade
		@endslot
		@slot('name')
		grade_id
		@endslot
	@endcomponent

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
	@component('select', ['collection' => $modes])
		@slot('label')
		Payment Mode
		@endslot
		@slot('name')
		payment_mode
		@endslot
	@endcomponent
	
	<!-- REGISTRATION -->
	@component('number')
		@slot('label')
		Registration
		@endslot
		registration
		@slot('value')
		@endslot
	@endcomponent

	<!-- TUITION -->
	@component('number')
		@slot('label')
		Tuition 
		@endslot
		tuition
		@slot('value')
		@endslot
	@endcomponent
	
	<!-- MISC -->
	@component('number')
		@slot('label')
		Misc
		@endslot
		misc
		@slot('value')
		@endslot
	@endcomponent
	
	<!-- COMPUTER -->
	@component('number')
		@slot('label')
		Computer
		@endslot
		computer
		@slot('value')
		@endslot
	@endcomponent

	<!-- ACTION -->
	@component('action')
	/fees
	@endcomponent

<!-- END OF CARD BODY -->
@endsection

@section('form')
/fees
@endsection
