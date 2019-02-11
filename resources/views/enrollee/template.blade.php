@extends('layouts.app')
@section('title','Enrollee')
</style>
@section('content')
<div class="container">
	<div class="row justify-content-center">
		@section('column_width')
		<div class="col-md-8">
		@show
			@section('body')
				@include('enrollee.default')
			@show
		</div>	
	</div>
</div>
@endsection

@include('enrollee.right_side_navbar')