@extends('create_form')
@section('title','Create Time')
	
<!-- CARD HEADER -->
@section('card_header')
	Create Time
@endsection

<!-- CARD BODY -->
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
			@endslot
		@endtime

		<!-- ACTION -->
		@action
		/times
		@endaction

<!-- END OF CARD BODY -->
@endsection

@section('form')
/times
@endsection