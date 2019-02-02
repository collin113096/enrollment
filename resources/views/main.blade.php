@extends('template')

@section('content')
@section('column_width')
<div class="col-md-8">
@show
	@include('card')
	<div class="d-flex mt-3">
		@yield('pagination')
	</div>
</div>
@endsection