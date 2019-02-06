@extends('edit_form')
@section('title','Edit Fee')

<!-- CARD HEADER -->
@section('card_header')
	Edit Fee
@endsection

<!-- CARD BODY -->
@section('card_body')

	<!-- GRADE -->
	@component('select', ['collection' => $grades, 'fee' => $fee])
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
	@component('select', ['collection' => $modes, 'modes' => $fee])
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
		{{ $fee->registration }}
		@endslot
	@endcomponent

	<!-- TUITION -->
	@component('number')
		@slot('label')
		Tuition 
		@endslot
		tuition
		@slot('value')
		{{ $fee->tuition }}
		@endslot
	@endcomponent
	
	<!-- MISC -->
	@component('number')
		@slot('label')
		Misc
		@endslot
		misc
		@slot('value')
		{{ $fee->misc }}
		@endslot
	@endcomponent
	
	<!-- COMPUTER -->
	@component('number')
		@slot('label')
		Computer
		@endslot
		computer
		@slot('value')
		{{ $fee->registration }}
		@endslot
	@endcomponent

	<!-- ACTION -->
	@component('action')
	/fees
	@endcomponent

<!-- END OF CARD BODY -->
@endsection

@section('form')
/fees/{{ $fee->id }}
@endsection



	