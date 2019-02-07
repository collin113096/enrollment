@extends('edit_form')
@section('title','Edit Fee')

<!-- CARD HEADER -->
@section('card_header')
	Edit Fee
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
			<option value="{{ $grade->id }}" {{ $grade->id == $fee->grade_id ? 'selected':'' }}>{{ $grade->name }}</option>
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
			<option value="{{ $mode['id'] }}" {{ $mode['id'] == $fee->payment_mode ? 'selected':'' }}>{{ $mode['name'] }}</option>
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
			{{ $fee->registration }}
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
			{{ $fee->tuition }}
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
			{{ $fee->misc }}
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
			{{ $fee->registration }}
		@endslot
	@endnumber

	<!-- ACTION -->
	@action
		/fees
	@endaction

<!-- END OF CARD BODY -->
@endsection

@section('form')
	/fees/{{ $fee->id }}
@endsection



	