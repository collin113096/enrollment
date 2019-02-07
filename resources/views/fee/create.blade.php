@extends('create_form')
@section('title','Create Fee')

<!-- CARD HEADER -->
@section('card_header')
	Create Fee
@endsection

<!-- CARD BODY -->
@section('card_body')

	<!-- GRADE -->
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
	
	<!-- REGISTRATION -->
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

	<!-- TUITION -->
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
	
	<!-- MISC -->
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
	
	<!-- COMPUTER -->
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

	<!-- ACTION -->
	@action
	/fees
	@endaction

<!-- END OF CARD BODY -->
@endsection

@section('form')
/fees
@endsection
