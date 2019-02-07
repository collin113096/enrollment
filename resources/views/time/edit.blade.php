@extends('edit_form')
@section('title','Edit Time')

@section('card_header')
	Edit Time
@endsection

@section('card_body')

	<!-- TIME IN -->
	@time
		@slot('label')
			Time In
		@endslot
		@slot('name')
			in
		@endslot
		@slot('value')
			{{ $time->in }}
		@endslot
	@endtime

	<!-- TIME OUT -->
	@time
		@slot('label')
			Time Out
		@endslot
		@slot('name')
			out
		@endslot
		@slot('value')
			{{ $time->out }}
		@endslot
	@endtime

	@action
		/times
	@endaction
@endsection
	
@section('form')
	/times/{{ $time->id }}
@endsection