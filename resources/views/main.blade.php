@extends('template')

@section('content')
<div class="col-md-8">
	@include('card')
	<div class="d-flex mt-3">
		@yield('pagination')
	</div>
</div>
@endsection